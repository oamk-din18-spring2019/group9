<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
    function add_form(){
      $data['page']='owners/add_form';
      $this->load->view('menu/content',$data);
    }

    function add_owner(){
    $this->load->model('Owners_model');
    $hashedPassword=password_hash($this->input->post('password'),PASSWORD_DEFAULT);

    $insert_data=array(
      "username"=>$this->input->post('username'),
      "password"=>$hashedPassword
    );
    $result=$this->Owners_model->add_owner($insert_data);
    $data['page']=$result ? 'users/succes' : 'users/error';


    }

}
