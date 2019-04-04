<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Staff_model');
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
