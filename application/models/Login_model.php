<?php
defined ('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model{

  public function __construct(){
    parent::__construct();
  }
}
{

  public function getPassword($givenUsername)
  {
    $this->db->select('password');
    $this->db->from('hotel');
    $this->db-where('username', $givenUsername);
    return $this->db->get()->row('password');
  }
}
