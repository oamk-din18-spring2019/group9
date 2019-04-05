<?php


class Owners_model extends CI_Model{

  function get_owner_users(){
      $this->db->select('*');
      $this->db->from('owner');
      return $this->db->get()->result_array();
    }
    function add_owner_user($insert_data){
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

    function add_owner($insert_data){
      //following line prevents sql error messages from showing
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
    function getNewId(){
      $this->db->select('max(owner_id) as id');
      $this->db->from('owner');
      return $this->db->get()->row('id');
  }
}
