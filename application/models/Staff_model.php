<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function getStaff(){
    $this->db->select('staff_id,staff_fname,staff_lname,staff_username,staff_password');
    $this->db->from('staff');
    return $this->db->get()->result_array();
  }

  function get_staff_users(){
      $this->db->select('*');
      $this->db->from('staff');
      return $this->db->get()->result_array();
    }
  }
?>
