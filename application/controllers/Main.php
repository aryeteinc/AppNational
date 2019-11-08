<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $plantilla_email;
	private $datosFormulario;

	public function __construct() {	
		parent::__construct();	
		$this->load->model('Main_model');
		$this->load->library('utilities');
		$this->plantilla_email = "email/plantillas/plantilla_email_national";					
	}	

	public function index(){
		$this->load->view('National/nat_form');
	}

	public function recibirForm(){
		$datosForm = $this->input->post();		
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		$this->form_validation->set_rules('SchoolName', 'School Name', 'required');
		$this->form_validation->set_rules('SchoolAddress', 'School Address', 'required');
		$this->form_validation->set_rules('SchoolCity', 'School City', 'required');
		$this->form_validation->set_rules('SchoolState', 'School State', 'required');
		$this->form_validation->set_rules('Coach', 'Coach\'s Name', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('nameParticipant', 'Name Participant', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('National/nat_form');
        }else{
        	//Capturamos los datos de los participantes, los campos que van a ser chequeados son:
        	//nameParticipant, KindParticipant, Gender
			$ArrayCrew = array();     	
			foreach ($datosForm as $key => $value) {
				$name = '';
				$Kind = '';
				$Gender = '';       		
				
				if (strpos($key, 'nameParticipant') !== FALSE) {
					if($value !== ""){
						$name = $value;
						array_push($ArrayCrew, $name);
					}					
				}

				if (strpos($key, 'KindParticipant') !== FALSE) {
					if($value !== ""){
						$Kind = $value;
						array_push($ArrayCrew, $Kind);
					}					
				}

				if (strpos($key, 'Gender') !== FALSE) {
					if($value !== ""){
						$Gender = $value;
						array_push($ArrayCrew, $Gender);
					}					
				}  				
				//echo $name ." ". $Kind ." ". $Gender;
        		//array_push($ArrayCrew, array($name,$Kind,$Gender));
			}	
			
			//llamamos un metodo de la libreria Utilities
			//que se encarga de obtener los horarios que el 
			//colegio quiere jugar

			$listaFirstday = $this->utilities->JornadasEscogidas($datosForm['FirstDay'],$datosForm['SecondDay'])[0];
			$listaSecondday = $this->utilities->JornadasEscogidas($datosForm['FirstDay'],$datosForm['SecondDay'])[1];
			//print_r($this->utilities->devolverFormato($listaFirstday));

			//print_r($this->utilities->JornadasEscogidas($datosForm['FirstDay'],$datosForm['SecondDay'])[0]);

        	//Armamos el array con los campos provenientes del Formulario
			$data = array (
				'SchoolName' => trim($datosForm['SchoolName']),
				'SchoolAddress' => $datosForm['SchoolAddress'],
				'SchoolCity' => $datosForm['SchoolCity'], 
				'SchoolState' => $datosForm['SchoolState'], 
				'SchoolZip' => $datosForm['SchoolZip'], 
				'Coach' => $datosForm['Coach'], 
				'Cellphone' => $datosForm['Cellphone'], 
				'Email' => $datosForm['Email'], 
				'Location' => $this->Main_model->getCity($datosForm['Location'])['name'],
				'dateLocation' => $this->Main_model->getCity($datosForm['Location'])['date'],
				'Level' => $datosForm['Level'],
				'FirstDay' => $this->utilities->devolverFormato($listaFirstday),
				'SecondDay' => $this->utilities->devolverFormato($listaSecondday),
				'urlPicture' => $this->Main_model->getCity($datosForm['Location'])['picture'],
				'EstimatedDate' => $datosForm['EstimatedDate'],
				'nameHotel' => $this->Main_model->getCity($datosForm['Location'])['Hotel'], 
				'link' => $this->Main_model->getCity($datosForm['Location'])['link'],
				'phoneHotel' => $this->Main_model->getCity($datosForm['Location'])['phone'], 
				'MethodPayment' => $datosForm['MethodPayment'],
				'Crew' => $this->armarTablaCrew($ArrayCrew),
				'Price' => $this->Main_model->getPrice(),
				'Discount' => $this->Main_model->getDiscount()
			);	
			$this->datosFormulario = $data;
			//$this->parser->parse('National/purcharse_view',$data);	
			$this->parser->parse($this->plantilla_email,$data);
        }		
	}


	//Esta funcion se encarga de tomar un array y convertirlo en una estructura de tabla 
	//que será utilizada en la vista 
	//La funcion recibe un array y devuelve un String con la forma 
	//de la parte de una tabla para ser visualizada en HTML
	private function armarTablaCrew(&$miCrew = NULL){
		//Definimos cuantas filas va a tener la tabla de los participantes
		//por defecto seran 3, Nombre, Tipo, Genero
		$NumerodeFilasTabla = 3;
		$NumerodeCampos = count($miCrew);
		$etiquetaHTML = "<tr>";
		$contador = 1;
		foreach ($miCrew as $key => $value) {
			$etiquetaHTML .= "<td>$value</td>";
			if($contador % 3 === 0){
				$etiquetaHTML .= "</tr>";
			}
			$contador+=1;
		}

		return $etiquetaHTML;
	}


	private function arrayObjetos(){
		$miarray = 
			array('primero' => 'Hola' ,
				'segundo' => 'Hola Segundo',
				'tercero' => 'Hola Tercero'
			);
		return $miarray;
	}

	public function getDatosAjax(){	
		if ($this->input->post('Datos')){
			$data = json_decode($this->input->post('Datos'));
			$misDatos = $data[0];
			$this->EscribirLog($misDatos);
			$this->load->library('cemail');
				
		}else{
			$this->load->view('National/nat_form');
		}	
				
	}

	//Esta funcion se encargara de llevar un log de los colegios
	//que envian la solicitud de inscripcion a las nacionales
	private  function EscribirLog($datosToLog){
		$this->load->helper('file');

		//Armamos la estructura del archivo log
		$estructura = "";
		$estructura .= "
		School Name => $datosToLog->SchoolName 
		School Address => $datosToLog->SchoolAddress 
		Coach => $datosToLog->Coach 
		Cellphone => $datosToLog->CellPhone  
		School City => $datosToLog->SchoolCity 
		School State => $datosToLog->SchoolState 		
		School Zip => $datosToLog->SchoolZip  
		Email => $datosToLog->Email 
		Location => $datosToLog->Location  
		Date Location => $datosToLog->DateLocation 
		First Day => $datosToLog->FirstDay  
		Second Day => $datosToLog->SecondDay 
		Estimated Day => $datosToLog->EstimatedDay   

		";
		//return $datosToLog->CellPhone;
		if ( ! write_file(FCPATH."/logs/test.txt",$estructura )){
			echo 'Unable to write the file';
		}else{
			echo 'File written!';
		}
	}

	public function success(){
		$this->parser->parse($this->plantilla_email,$this->datosFormulario);
		
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */