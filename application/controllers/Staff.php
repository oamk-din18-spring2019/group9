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
        $data['Owners']=$this->Owners_model->get_owner_users();
        $data['page']='owners/show_owners';
        $this->load->view('owners/show_owner',$data);

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
