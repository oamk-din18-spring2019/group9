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

    function add_staff_user($insert_data){
      $this->db->db_debug = false;
      $this->db->insert('staff',$insert_data);
      $test=$this->db->affected_rows();
      if($test==1){
        return true;
      }
      else {
        return false;
      }
    }

    function getNewId(){
      $this->db->select('max(staff_id) as id');
      $this->db->from('staff');
      return $this->db->get()->row('id');
    }

  }
?>
