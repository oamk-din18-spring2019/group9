<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owners_model extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function add_user($insert_data){
    $this->db->db_debug = false;
    $this->db->insert('hotel',$insert_data);
    $test=$this->db->affected_rows();
    if($test==1){
      return true;
    }
    else {
      return false;
    }

}
