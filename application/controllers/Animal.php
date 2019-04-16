<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Animals_model');

  }

  function show_animals()
  {
      $data['animal']=$this->Animals_model->get_animals();
      $data['page']='animals/show_animals';
      $this->load->view('staff/staff_content',$data);

  }

  function add_animal_form(){
    $data['page']='animals/add_form';
    $this->load->model('Animals_model');
    $data['new_id']=$this->Animals_model->getNewId()+1;
    $this->load->view('menu/content',$data);
  }

  function add_animal(){
    //$this->load->model('Animals_model');
    $this->load->model('Stay_model');
    $insert_animal=array(
      "animal_id"=>$this->input->post('animal_id'),
      "animal_name"=>$this->input->post('animal_name'),
      "animal_species"=>$this->input->post('animal_species'),
      "animal_description"=>$this->input->post('animal_description'),
      "animal_food"=>$this->input->post('animal_food'),
      "animal_medical"=>$this->input->post('animal_medical'),
      "animal_instruction"=>$this->input->post('animal_instruction')
    );
    $result1=$this->Animals_model->add_animal($insert_animal);
    $insert_stays=array(
      "animal_id"=>$this->input->post('animal_id'),
      "owner_id"=>$this->input->post('owner_id'),
      "check_in"=>$this->input->post('check_in'),
      "check_out"=>$this->input->post('check_out')
    );
    $result2=$this->Stay_model->add_stay($insert_stays);
    $page=$result1 ? 'animals/confirmation' : 'animals/error';
    $this->load->view($page);
  }

  function add_new_animal_form(){
    $this->load->model('Stay_model');
    $data['page']='animals/new_add_form';
    $this->load->model('Animals_model');
    $data['new_id']=$this->Animals_model->getNewId()+1;
    $this->load->view('owners/owner_content',$data);
  }

  function add_new_animal(){
    //$this->load->model('Animals_model');
    $this->load->model('Stay_model');
    $insert_animal=array(
      "animal_id"=>$this->input->post('animal_id'),
      "animal_name"=>$this->input->post('animal_name'),
      "animal_species"=>$this->input->post('animal_species'),
      "animal_description"=>$this->input->post('animal_description'),
      "animal_food"=>$this->input->post('animal_food'),
      "animal_medical"=>$this->input->post('animal_medical'),
      "animal_instruction"=>$this->input->post('animal_instruction')
    );
    $result1=$this->Animals_model->add_animal($insert_animal);
    $insert_stays=array(
      "animal_id"=>$this->input->post('animal_id'),
      "owner_id"=>$this->input->post('owner_id'),
      "check_in"=>$this->input->post('check_in'),
      "check_out"=>$this->input->post('check_out')
    );
    $result2=$this->Stay_model->add_stay($insert_stays);
    $page=$result1 ? 'animals/confirmation_of_new_animal' : 'animals/error';
    $this->load->view($page);
  }

}
