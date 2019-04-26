<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animals_model extends CI_Model{

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
  function get_animals(){
    $this->db->select('*');
    $this->db->from('animal');
    return $this->db->get()->result_array();
  }

  function get_animal(){
    $this->db->select('*');
    $this->db->from('animal');
    $this->db->join('stays','animal.animal_id=stays.animal_id','inner');
    $this->db->join('owner','stays.owner_id=owner.owner_id','inner');
    $this->db->where('owner.owner_id',$_SESSION['owner_id']);
    return $this->db->get()->result_array();
  }
  public function add_stay($insert_data)
  {
    $this->db->insert('stays',$insert_data);
    return $this->db->affected_rows();
  }
  function edit_animal($update_data,$id){
  $this->db->db_debug = false;
  $this->db->where('animal_id',$id);
  $this->db->update('animal',$update_data);
  return $this->db->affected_rows();
  }



  function get_chosen($id){
  $this->db->select('*');
  $this->db->from('animal');
  $this->db->where('animal_id',$id);
  return $this->db->get()->result_array();
}

}
