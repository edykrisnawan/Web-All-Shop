<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_latihan extends CI_Model {

    function get_gambarhotel(){
        $data=$this->db->get('tb_hotel')->result_array();
        return $data;
    }

    function get_gambarpaket(){
        $data=$this->db->get('tb_paketwisata')->result_array();
        return $data;
    } 

    function get_infowstalam(){
        $data=$this->db->get('tb_wstalam')->result_array();
        return $data;
    }
     
}
?>