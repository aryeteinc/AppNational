<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//Esta Clase se encargara de enviar los emails del
//Sistema
class Cemail
{
    protected $ci;
    protected $from = "admin@qunlimited.com";
    protected $direccion = "cd343434@gmail.com";
    protected $mailWebmaster = "aryeteinc@gmail.com";

    public function __construct(){
        $this->ci =& get_instance();
        $this->ci->load->library('email');   
        // $config['protocol'] = 'smtp';
        // $config['smtp_host'] = 'smtp.qunlimited.com';
        // $config['smtp_port'] = '587';
        // $config['smtp_timeout'] = '30';
        // $config['smtp_user'] = 'admin@qunlimited.com';
        // $config['smtp_pass'] = '288paq03';
        // $config['charset'] = 'utf-8';
        // $config['mailtype'] = 'html';
        // $config['wordwrao'] = TRUE;
        // $config['newline'] ="\r\n";
        // $config['crlf'] ="\r\n";
        // $this->ci->email->initialize($config);	
        // $this->ci->email->from('admin@qunlimited.com','NAT');
        // $this->ci->email->to('aryeteinc@gmail.com');
        // $this->ci->email->subject('Test');
        // $this->ci->email->message('Email de test');		
        //$this->ci->email->send();    
    }

    public function Sendemail($mensaje){

        $config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '5';
		$config['smtp_user'] = 'qunlimitedwm@gmail.com';
		$config['smtp_pass'] = 'qiznqwwlvbydmifz'; //Es la contraseña de aplicacion es diferente a la contrasena original
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['wordwrap'] = TRUE;
		$config['newline'] ="\r\n";
		$config['crlf'] ="\r\n";
		$this->ci->email->initialize($config);	
		$this->ci->email->from('qunlimitedwm@gmail.com','NAT');
		$this->ci->email->to('aryeteinc@gmail.com');
		$this->ci->email->subject('Test');
		$this->ci->email->message($mensaje);		
		//$this->email->send();
		if ($this->ci->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->ci->email->print_debugger());
        }
        
        //$this->ci->email->send();
    }

    public function mensaje ($datos){
        return $datos;
    }

    

}

/* End of file LibraryName.php */
