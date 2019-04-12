<?php


class Stay_model extends CI_Model
{

  public function getStay()
  {
      $this->db->select('*');
      $this->db->from('stays');
      return $this->db->get()->result_array();
  }

  public function add_stay($insert_data)
  {
    $this->db->insert('stays',$insert_data);
    return $this->db->affected_rows();
  }

  public function get_chosen($id)
  {
      $this->db->select('*');
      $this->db->from('stays');
  }
}
