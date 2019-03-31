<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function getStaff(){
    $this->db->select('idStaff,fname,lname,username,');
    $this->db->from('staff');
    $this->db->
    return $this->db->get()->result_array();
  }
  public function add_staff($insert_data){
    $this->db->insert('staff',$insert_data);
    return $this->db->affected_rows();
  }
