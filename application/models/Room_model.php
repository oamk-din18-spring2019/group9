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

  function stay_duration($free_id){
    $this->db->select('DATEDIFF(Check_out,Check_in) as duration');
    $this->db->from('stays');
    $this->db->where('owner_id', $free_id);
    return $this->db->get()->row('duration');
  }

  function get_free_id($arrival, $depart, $species){
    $this->db->select('min(room.room_id) as free_room');
    $this->db->from('room');
    $this->db->join('stays','room.room_id=stays.room_id','left');
    //$this->db->where('room.room_id >',10);
    $this->db->where('animal_id is NULL');
    $this->db->or_where('check_in >',$depart);
    $this->db->or_where ('check_out <',$arrival);
    if($species==='Dog'){
      $this->db->where('room.room_id >',11);
    }
    else
      $this->db->where('room.room_id <=',10);
    //$this->db->where('check_out>',$depart);
    //$this->db->or_where('check_in<',$arrival);
    //$this->db->or_where('check_out<',$depart);

    return $this->db->get()->row('free_room');
  }

  /*function stay_cost(){
    $this->db->select(' as cost');
    $this->db->from('stays');
    $this->db->where('room_id', '2');
    return $this->db->get()->row('cost');
  }*/

}
