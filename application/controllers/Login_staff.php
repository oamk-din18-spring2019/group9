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
    $this->load->model('Login_model_staff');
    $givenStaffUser = $this->input->post('staff_username');
    $givenStaffPassword = $this->input->post('staff_password');
    $db_password = $this->Login_model_staff->getPassword($givenStaffUser);

    if (password_verify($givenStaffPassword, $db_password)) {
      $_SESSION['logged_in'] = true;
      $_SESSION['staff_username'] = $givenStaffUser;
      $data['page'] = 'login/personal_page';
      $this->load->view('menu/content', $data);
    }
    else {
      $_SESSION['logged_in'] = false;
      redirect('login');
    }

    function logout(){
      $_SESSION['logged_in'] = false;
      $_SESSION['staff_username'] = "";
      $data['page'] = 'login/logout_page';
      $this->load->view('menu/content', $data);
    }
  }
}