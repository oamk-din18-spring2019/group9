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

  function calculate_price() {

  }

}

