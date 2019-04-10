<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animals_model extends CI_Controller{

  function add_animal($insert_data){
    //$this->db->db_debug = false;
    $this->db->insert('animal',$insert_data);
    $test=$this->db->affected_rows();

    if($test==1){
      return true;
    }
    else {
      return false;
    }

  }

  function getNewId(){
    $this->db->select('max(animal_id) as id');
    $this->db->from('animal');
    return $this->db->get()->row('id');
  }

}
