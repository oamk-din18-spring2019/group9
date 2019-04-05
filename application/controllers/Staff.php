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
      $this->load->model('Staff_model');
      $data['staff']=$this->Staff_model->get_staff_users();
      $data['page']='staff/show_staff';
      $this->load->view('staff/show_staff',$data);



  }

      function show_owners()
      {
        $this->load->model('Staff_model');
        $data['staff']=$this->Staff_model->get_staff_users();
        $data['page']='staff/show_staff';
        $this->load->view('menu/form',$data);

      }


      function add_staff_user_form(){
        $data['page']='staff/add_staff_user_form';
        $this->load->model('Staff_model');
        $data['new_staff_id']=$this->Staff_model->getNewId()+1;
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

}

  ?>
