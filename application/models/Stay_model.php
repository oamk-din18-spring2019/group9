<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Stay_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function getStay()
  {
      $this->db->select('*');
      $this->db->from('stays');
      return $this->db->get()->result_array();
  }
  public function add_stay($insert_data)
  {
    $this->db->insert('Stay',$insert_data);
    return $this->db->affected_rows();
  }
  public function get_chosen($id)
  {
      $this->db->select('*');
      $this->db->from('stays');
  }
}
