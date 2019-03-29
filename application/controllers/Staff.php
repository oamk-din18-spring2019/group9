<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->('');
  }
  public function getStaff(){
    $this->db->select('idStaff,fname,lname,username,');
    $this->db->from('staff');
    $this->db->
    return $this->db->get()->result_array();
  }

  function add_staff(){
      //print_r($this->input->post());
      $insert_data=array(
        "idstaff" => $this->input->post('id'),
        "fname" => $this->input->post('fn'),
        "lname" => $this->input->post('ln'),
        "email" => $this->input->post('em')
        }

        function show_staff()
      {
        $data['staff']=$this->Staff_model->getStaff();
        $data['page']='staff/show_staff';
        $this->load->view('menu/content',$data);

      }

  ?>
