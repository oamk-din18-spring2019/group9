<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->('');
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
      function add_form(){
        $data['page']='staff/add_form';
        $this->load->view('menu/content',$data);
      }
  ?>
