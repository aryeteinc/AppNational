<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	private $plantilla_email;
	private $datosFormulario;
	private $arrayCrew2;

	public function __construct() {	
		parent::__construct();	
		$this->load->model('Main_model');
		$this->load->library('utilities');
		$this->load->library('Paypal_lib');
		//$this->plantilla_email = "email/plantillas/plantilla_email_natFB";	
		$this->plantilla_email = "email/plantillas/plantilla_email_national";
		$this->arrayCrew2 = array();				
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
			
			$indice = 0;
			$numeroCampos = 3;

			foreach ($datosForm as $key => $value) {
				$name = '';
				$Kind = '';
				$Gender = '';
				
				
				if (strpos($key, 'nameParticipant') !== FALSE) {
					if($value !== ""){
						$name = $value;
						array_push($ArrayCrew, $name);	
						$arraytest['name'] = $name;
						$indice++;					
					}					
				}

				if (strpos($key, 'KindParticipant') !== FALSE) {
					if($value !== ""){
						$Kind = $value;
						array_push($ArrayCrew, $Kind);
						$arraytest['kind'] = $Kind;
						$indice++;
					}					
				}

				if (strpos($key, 'Gender') !== FALSE) {
					if($value !== ""){
						$Gender = $value;
						array_push($ArrayCrew, $Gender);
						$arraytest['gender'] = $Gender;
						$indice++;
					}					
				}  				
				//echo $name ." ". $Kind ." ". $Gender;
				//array_push($ArrayCrew, array($name,$Kind,$Gender));
				
				if(($indice % 3 === 0) AND ($indice !== 0)){					
					array_push($this->arrayCrew2, $arraytest);
					$arraytest = [];
				}
				
				//$indice++;
				
			}	
			
			
			//llamamos un metodo de la libreria Utilities
			//que se encarga de obtener los horarios que el 
			//colegio quiere jugar

			
			//$listaFirstday = $this->utilities->JornadasEscogidas($datosForm['FirstDay'])[0];
			$listaFirstday = $datosForm['FirstDay'];
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
				'FirstDay' => $listaFirstday,
				//'SecondDay' => $this->utilities->devolverFormato($listaSecondday),
				'urlPicture' => $this->Main_model->getCity($datosForm['Location'])['picture'],
				'EstimatedDate' => $datosForm['EstimatedDate'],
				'EstimatedTime' => $datosForm['EstimatedTime'],				
				'nameHotel' => $this->Main_model->getCity($datosForm['Location'])['Hotel'], 
				'link' => $this->Main_model->getCity($datosForm['Location'])['link'],
				'phoneHotel' => $this->Main_model->getCity($datosForm['Location'])['phone'], 
				'mp' => $datosForm['mp'],
				'Crew' => $this->armarTablaCrew($ArrayCrew),
				'Crew2' => $ArrayCrew,
				'Price' => $this->Main_model->getPrice(),
				'Discount' => $this->Main_model->getDiscount(),
				'idtransaction' => date('Y').uniqid().date('md')
			);	
			$this->datosFormulario = $data;
			$this->parser->parse('National/purcharse_view',$data);				
			//$this->parser->parse($this->plantilla_email,$data);
			//$arrayTitulos = array('name','kind','gender');
			
			//$c = array_combine($arrayTitulos, $ArrayCrew);
			
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
		$etiquetaHTML = "<tr class='itemsHijos'>";		
		$contador = 1;
		foreach ($miCrew as $key => $value) {
			$etiquetaHTML .= "<td class='valoresHijos'>$value</td>";			
			if($contador % 3 === 0){
				$miarraytemp[$key]=$value;
				//array_push($this->arrayCrew2,$miarraytemp);
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

	private function makeEmail($datos = NULL,$tp,$nameForm = "321 Question Form for "){
		
		if($datos !== NULL){  
			$this->load->library('email');
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'smtp.qunlimited.com';  
			$config['smtp_port'] = '587';  
			$config['smtp_timeout'] = '10';  
			$config['smtp_user'] = 'email@qunlimited.com';  
			//$config['smtp_pass'] = 'qiznqwwlvbydmifz';
			$config['smtp_pass'] = '70$gKB9grAdM';
			$config['charset'] = 'utf-8';
			$config['mailtype'] = 'html';
			$config['wordwrap'] = TRUE;
			$config['newline'] = "\r\n";
			$config['crlf'] = "\r\n";
			$this->email->initialize($config); 
			$message = $this->parser->parse('email/plantillas/plantilla_email_national',$datos, TRUE);
			//$emails  = array('cb343434@gmail.com',$datos['email1'],$datos['email2']);
			$emails  = array('aryeteinc@gmail.com');            

			$this->email->from('email@qunlimited.com', 'National Academic Championship.');
			$this->email->to($emails);
			$this->email->cc('aryeteinc@gmail.com');
			//$this->email->bcc('aryeteinc@gmail.com');
			$this->email->reply_to('cb343434@gmail.com', 'Replay for Admin');
			$this->email->subject($nameForm  . " "  . $datos->SchoolName);
			$this->email->message($message);
			$this->email->set_alt_message('This is the alternative message');

			$respuesta = array();
			//$respuesta['redireccion pagina'] = $message;
			
			if($tp === 'cc'){ 
				$respuesta['tp'] = "cc";                   
				if(!$this->email->send()){
					//echo "Error al Enviar el Email " .$message;
					$respuesta['email_debugger'] = $this->email->print_debugger();
					//write_file(dirname(BASEPATH).'/logs/321/321 Question Form for '.$datos['sname'].'.html',var_export($message, true));
					//$this->makeFile($this->session->userdata('competition')."_".$this->session->userdata("fullname"),"Error al Enviar el Email");
				}else{                    
					//$this->load->view('response/success',$datos);
					// write_file(dirname(BASEPATH).'/logs/321/321 Question Form for '.$datos['sname'].'.html',var_export($message, true));
					//$this->makeFile($this->session->userdata('competition')."_".$this->session->userdata("fullname"),"Renviando a paypal...");
					//$respuesta['redireccion pagina'] = $this->paypal_lib->paypal_auto_form(); 
					$respuesta['redireccion pagina'] = $this->paypal_lib->paypal_auto_form(); 
				}
			}else{ //Si no es Tarjeta de Credito
				$respuesta['tp'] = "ncc";
				if(!$this->email->send()){
					//echo "Error al Enviar el Email " .$message;
					$respuesta['email_debugger'] = $this->email->print_debugger();
					//write_file(dirname(BASEPATH).'/logs/321/321 Question Form for '.$datos['sname'] .'.html',var_export($data, true));
					//show_error($this->email->print_debugger());
					//$this->makeFile($this->session->userdata('competition')."_".$this->session->userdata("fullname"),"Error al Enviar el Email");
				}else{ 
					// $this->makeFile($this->session->userdata('competition')."_".$this->session->userdata("fullname"),"Se Envio el Email");
					//this->makeFile($this->session->userdata('competition')."_".$this->session->userdata("fullname"),"Enviando a pagina SUCCESS");

					//$this->load->view('response/success',$datos);
					//write_file(dirname(BASEPATH).'/logs/321/321 Question Form for '.$datos['sname'].'.html',var_export($message, true));
					$respuesta['redireccion pagina'] = $this->load->view('thank' , '' , TRUE);
				} 				
			}
			print_r(json_encode($respuesta));
		}       
	}

	public function getDatosAjax(){	
		if ($this->input->post('Datos')){
			$data = json_decode($this->input->post('Datos'));
			
			if($data->mp === "Credit Card"){

				//echo "Transaccion con Tarjeta";
				//$paypalURL = 'https://www.paypal.com/cgi-bin/webscr';
				//$paypalID = 'sandoxqunlimited@gmail.com'; //business email
				//$paypalID = '5A2AKQ479QWY6';
				$returnURL = base_url('index.php/main/thank'); //payment success url
				$cancelURL = base_url('index.php/main/cancel'); //payment cancel url
				//$notifyURL = base_url('index.php/verify/C_login_verify/ipn'); 
				$userID = 1; //current user idapi url
				//$this->paypal_lib->add_field('business', $paypalID);
				// $this->paypal_lib->add_field('return', $returnURL);
				$this->paypal_lib->add_field('cancel_return', $cancelURL);
				//$this->paypal_lib->add_field('notify_url', $notifyURL);
				$this->paypal_lib->add_field('custom', $data->idtransaction);

				$this->paypal_lib->add_field("item_name_1",$data->Location ." ".$data->Level);
				$this->paypal_lib->add_field("amount_1",$data->price);
				$this->paypal_lib->add_field("quantity_1",'1');
				$this->paypal_lib->add_field('shipping_1', '0');

				// $contador = 1;
				// foreach ($data->items as $key => $value) {                       
				// 	$this->paypal_lib->add_field("item_name_".$contador,$value->item);
				// 	$this->paypal_lib->add_field("amount_".$contador,$value->priceUnit);
				// 	$this->paypal_lib->add_field("quantity_".$contador,$value->Quantity);
				// 	$this->paypal_lib->add_field('shipping_'.$contador, '0');
				// 	// $this->paypal_lib->add_field("on".$contador,"ID");
				// 	// $this->paypal_lib->add_field("ons".$contador,$value['id']);
				// 	//echo $value->item;
				// 	$contador++;
				// }
			
				$this->makeEmail( $data,'cc','National Academic Competition');
			}else{
				//echo "No es Tarjeta Credito";
				$this->makeEmail( $data,'cc','National Academic Competition');
			}	
			//print_r(json_encode($data));
		}		
	}

	public function thank(){$this->load->view('thank');}
	public function cancel(){$this->load->view('cancel');}

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
		$this->load->view('email/plantillas/plantilla_email_natFB');
		
		
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */