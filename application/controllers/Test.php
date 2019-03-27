<?php

class Test extends CI_Controller{

  function model_test(){
    $this->load->model('Test_model');
    $data['message']=$this->Test_model->saysomething();
    $this->load->view('model_test', $data);
  }

  public function index()
  {
    $this->load->view('model_test');
  }
}
