<?php
defined ('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{

  function __construct()
  {
    
  }

  function index(){
    $data['page']='login/login_form';
    $this->load->view('menu/content', $data);
  }

  function login(){
    $this->load->model('Login_model');
    $givenUsername = $this->input->post('username');
    $givenPassword = $this->input->post('password');
    $db_password = $this->Login_model->getPassword($givenUsername);

    if (password_verify($givenPassword, $db_password)) {
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $givenUsername;
      $data['page'] = 'login/personal_page';
      $this->load->view('menu/content', $data);
    }
    else {
      $_SESSION['logged_in'] = false;
      redirect('login');
    }

    function logout(){
      $_SESSION['logged_in'] = false;
      $_SESSION['username'] = "";
      $data['page'] = 'login/logout_page';
      $this->load->view('menu/content', $data);
    }
  }
}
