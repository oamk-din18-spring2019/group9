<?php


class Staff_model extends CI_Model{

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
  }
