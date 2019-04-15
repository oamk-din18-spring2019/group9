<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['page']='room/start';
    $this->load->view('menu/content', $data);
  }

  function show_stay_dates() {
    $this->load->model('Room_model');
    $data['room']=$this->Room_model->show_stay_duration();
    $data['page']='room/show_room';
    $this->load->view('staff/staff_content',$data);

  }

  /*function calculate_price() {

  }*/

}
