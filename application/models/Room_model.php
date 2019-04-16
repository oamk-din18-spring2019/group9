<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function show_stay_duration(){
    $this->db->select('*');
    $this->db->from('stays');
    return $this->db->get()->result_array();
  }

  function stay_duration(){
    $this->db->select('DATEDIFF(Check_out,Check_in) as duration');
    $this->db->from('stays');
    $this->db->where('owner_id', '2');
    return $this->db->get()->row('duration');
  }

  /*function stay_cost(){
    $this->db->select(' as cost');
    $this->db->from('stays');
    $this->db->where('room_id', '2');
    return $this->db->get()->row('cost');
  }*/

}
