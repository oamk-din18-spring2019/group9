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
    $id_free_room=$this->Room_model->get_free_id($_SESSION['arrival'], $_SESSION['depart'], $_SESSION['species']);
    $data['room']=$this->Room_model->show_stay_duration($id_free_room);
    $data['page']='room/show_stay_dates';
    $this->load->view('staff/staff_content',$data);

  }

/*
    function calculate_price() {
    if ($room_id < '10') {
      echo 40 * $duration;
    }
    else ($room_id > '10' && $room_id < '20') {
      echo 50 * $duration;
    }
``
  }
*/
  function show_room(){
    $this->load->model('Room_model');
    $data['room']=$this->Room_model->stay_duration();
    $data['page']='room/show_room';
    $this->load->view('staff/staff_content', $data);
  }

}
