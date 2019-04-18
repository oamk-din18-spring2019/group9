<?php


class Owners_model extends CI_Model{

  function get_owner_users(){
      $this->db->select('*');
      $this->db->from('owner');
      return $this->db->get()->result_array();
    }

    function get_owner(){
      $owner_id= $_SESSION['owner_id'];
      $this->db->select('*');
      $this->db->from('owner');
    $this->db->where('owner_id', $owner_id);
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
      //$this->db->db_debug = false;
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
  function get_chosen($id){
  $this->db->select('*');
  $this->db->from('owner');
  $this->db->where('owner_id',$id);
  return $this->db->get()->result_array();
}

  function edit_owner($update_data,$id){
  $this->db->db_debug = false;
  $this->db->where('owner_id',$id);
  $this->db->update('owner',$update_data);
  return $this->db->affected_rows();
}
}
?>
