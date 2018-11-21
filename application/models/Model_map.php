<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_map extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get_lokasi($id){
        $result = $this->db->query("SELECT * FROM rute where no='".$id."'");
        if($result->num_rows()){
            return $result->row();
        } else {
            return array('error' => true, 'messages' => 'Data Angkot Tidak Ada');
        }
    }
}