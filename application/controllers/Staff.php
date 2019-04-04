<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }


      function add_form(){
        $data['page']='Staff/add_form';// WARNING:
        $this->load->view('Staff/Add_form',$data);
      }

  function show_staff()
  {
    $data['staff']=$this->Staff_model->getStaff();
    $data['page']='staff/show_staff';
    $this->load->view('Staff/add_form',$data);

  }

      function show_owners()
      {
        $data['owners']=$this->Owners_model->getowners();
        $data['page']='owners/show_owners';
        $this->load->view('menu/content',$data);

      }

<<<<<<< HEAD

  function show_animals()
  {
    $data['animals']=$this->animals_model->getanimals();
    $data['page']='animals/show_animals';
    $this->load->view('menu/content',$data);

  }

  function show_stays()
  {
    $data['stays']=$this->Stays_model->getStays();
    $data['page']='stays/show_stays';
    $this->load->view('menu/content',$data);

  }
=======
      function add_staff_user_form(){
        $data['page']='staff/add_staff_user_form';
        $this->load->view('menu/content',$data);
      }
      function add_staff_user(){
        //print_r($this->input->post());
        $this->load->model('Staff_model');
        $hashedPassword=password_hash($this->input->post('staff_password'),PASSWORD_DEFAULT);
        $insert_data=array(
          "staff_id"=>$this->input->post('staff_id'),
          "staff_fname"=>$this->input->post('staff_fname'),
          "staff_lname"=>$this->input->post('staff_lname'),
          "staff_username"=>$this->input->post('staff_username'),
          "staff_password"=>$hashedPassword,
          "staff_hours"=>$this->input->post('staff_hours')
        );
        $result=$this->Staff_model->add_staff_user($insert_data);
        $data['page']='staff/add_staff_user_form';
        $this->load->view('menu/content',$data);
      }
>>>>>>> 1b47195ed2aac20b13f0f82b436b7684ca2ba00b
}

  ?>
