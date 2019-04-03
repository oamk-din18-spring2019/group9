<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function add_animalform(){
    $data['page']='animals/add_form';
    $this->load->view('menu/content',$data);
  }

  function add_animal(){
    $this->load->model('Animals_model');
    $insert_data=array(
      "animal_id"=>$this->input->post('animal_id'),
      "animal_name"=>$this->input->post('animal_name'),
      "animal_species"=>$this->input->post('animal_species'),
      "animal_description"=>$this->input->post('description'),
      "animal_food"=>$this->input->post('food'),
      "animal_medical"=>$this->input->post('medical'),
      "animal_instruction"=>$this->input->post('instruction'),
      "animal_arrival"=>$this->input->post('arrival'),
      "animal_depart"=>$this->input->post('depart')
    );
    $result=$this->Animals_model->add_animal($insert_data);
    $page=$result ? 'animals/confirmation' : 'animals/error';
    $this->load->view($page);
  }

}
