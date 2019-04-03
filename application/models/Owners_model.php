<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owners_model extends CI_Controller{

  function add_owner($insert_data){
    $this->db->db_debug = false;
    $this->db->insert('owner',$insert_data);
    $test=$this->db->affected_rows();

    if($test==1){
      return true;
    }
    else {
      return false;
    }

  }

}
