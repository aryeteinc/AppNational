<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    public function getCity($codigoCiudad = NULL){
        //Vbamos a simular los datos de una BD
        $city = array(
            'NO' => array(
                'name' => 'New Orleans',
                'date' => 'May 23 - 25',
                'Hotel' => 'Hampton Inn & Suites New Orleans Convention Center Hotel',
                'link' => 'https://hamptoninn.hilton.com/en/hp/groups/personalized/M/MSYLAHX-NAA-20200528/index.jhtml?WT.mc_id=POG',
                'phone' => ' 1-800-292-0653',
                'picture' => base_url('assets/img/NO.jpg')
            ),
            'DC' => array(
                'name' => 'Washington, D.C.',
                'date' => 'May 29 - 31',
                'Hotel' => 'Hilton Alexandria Mark Center Hotel, 5000 Seminary Rd, Alexandria, VA 22311',
                'link' => 'https://book.passkey.com/e/49971647',
                'phone' => '877-783-8258',
                'picture' => base_url('assets/img/DC.jpg')
            ),
            'CH' => array(
                'name' => 'Chicago',
                'date' => 'June 6 - 8',
                'Hotel' => 'Sheraton Four Points at O\'Hare',
                'link' => 'https://www.marriott.com/event-reservations/reservation-link.mi?id=1564506491400&key=GRP&app=resvlink',
                'phone' => '847-671-6000',
                'picture' => base_url('assets/img/CH.jpg')
            ),
            'AT' => array(
                'name' => 'Atlanta',
                'date' => 'June 12 - 14',
                'Hotel' => 'DoubleTree Atlanta Airport',
                'link' => 'https://doubletree.hilton.com/en/dt/groups/personalized/A/ATLANDT-NAA-20200610/index.jhtml?WT.mc_id=POG',
                'phone' => '800-514-4296',
                'picture' => base_url('assets/img/AT.jpg')
            ),
            
        );

        //Washington, D.C., May 29 - 31
        //Atlanta, June 12 - 14

        return $city[$codigoCiudad];
    }

    public function getPrice(){
        return number_format(800);
    }

    public function getDiscount(){
        return number_format(0,2);
    }

}

/* End of file Main_model.php */
