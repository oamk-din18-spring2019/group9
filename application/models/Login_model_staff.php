<?php
defined ('BASEPATH') OR exit('No direct script access allowed');


class Login_model_staff extends CI_Model{

  public function __construct(){
    parent::__construct();
  }
}
{

  public function getPassword($givenStaffUser)
  {
    $this->db->select('staff_password');
    $this->db->from('staff');
    $this->db-where('staff_username', $givenStaffUser);
    return $this->db->get()->row('staff_password');
  }
}
