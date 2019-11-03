<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities{
    protected $ci;
    protected $arrayJornadas;

    public function __construct(){
        $this->ci =& get_instance();
        $this->arrayJornadas = array(            
            'Morning',
            'Afternoon',
            'Evening'
        );
    }

    public function JornadasEscogidas($firstDay, $secondDay){         
        /*
            Esta funcion se encargara
            de determinar el horario que las escuelas
            vas\n a jugar basado en el horario 
            que no desea jugar
            es decir si el Primer dia escojen no jugar
            en la mañana la funcion va a elegir las 
            otras 2 opciones Tarde y noche
        */

        $fd = array($firstDay);
        $sd = array($secondDay);

        //Calculamos la diferencia entre los arrays
        $resultadoFd = ($firstDay !== 'no')?array_diff($this->arrayJornadas, $fd):$this->arrayJornadas;
        $resultadoSd = ($secondDay !== 'no')?array_diff($this->arrayJornadas, $sd):$this->arrayJornadas;
        
        return array($resultadoFd,$resultadoSd);

    }

    //Esta funcion devuelve en un formato determinado
    public function devolverFormato($arrayconFormato){
        //Devuelve los valores del array en formato de una lista
        $lista = "";
        foreach ($arrayconFormato as $key => $value) {
            $lista.= $value . " ";  
        }
        return $lista;
    }
}

/* End of file Utilities.php */




