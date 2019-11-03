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
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.qunlimited.com';
        $config['smtp_port'] = '587';
        $config['smtp_timeout'] = '30';
        $config['smtp_user'] = 'admin@qunlimited.com';
        $config['smtp_pass'] = '288paq03';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['wordwrao'] = TRUE;
        $config['newline'] ="\r\n";
        $config['crlf'] ="\r\n";
        $this->ci->email->initialize($config);	
        $this->ci->email->from('admin@qunlimited.com','NAT');
        $this->ci->email->to('aryeteinc@gmail.com');
        $this->ci->email->subject('Test');
        $this->ci->email->message('Email de test');		
        $this->ci->email->send();    
    }

    public function Sendemail(){
        $this->ci->email->from($this->from, 'National Academic Championship');
        $this->ci->email->to($this->mailWebmaster);
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');

        $this->ci->email->subject('Email Test');
        $this->ci->email->message('Testing the email class.');
        $this->ci->email->send();
    }

    

}

/* End of file LibraryName.php */
