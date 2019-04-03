<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

    function add_form(){
    //$data['page']='owners/add_form';
    //$this->load->view('menu/content',$data);
    $data['page']='owners/add_form';
    $this->load->view('owners/add_form');
    }
    function add_owner(){
      //print_r($this->input->post());
      $this->load->model('Owners_model');
      $hashedPassword=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
      $insert_data=array(
        "owner_id"=>$this->input->post('owner_id'),
        "owner_fname"=>$this->input->post('fname'),
        "owner_lname"=>$this->input->post('lname'),
        "owner_phone"=>$this->input->post('phone'),
        "owner_birthday"=>$this->input->post('bday'),
        "owner_username"=>$this->input->post('username'),
        "owner_password"=>"$hashedPassword"
      );
      $result=$this->Owners_model->add_owner($insert_data);
      $page=$result ? 'animals/add_form' : 'owners/error';
      $this->load->view($page);

    }

}
