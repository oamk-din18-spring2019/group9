<?php
defined ('BASEPATH') OR exit('No direct script access allowed');


class Login_model_owner extends CI_Model{

  public function __construct(){
    parent::__construct();
  }



  public function getPassword($givenOwnerUser)
  {
    $this->db->select('owner_password');
    $this->db->from('owner');
    $this->db->where('owner_username', $givenOwnerUser);
    return $this->db->get()->row('owner_password');
  }
}
