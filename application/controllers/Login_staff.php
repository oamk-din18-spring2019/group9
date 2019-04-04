<?php
defined ('BASEPATH') OR exit('No direct script access allowed');


class Login_staff extends CI_Controller
{


  function menu(){
    $data['page'] = 'login/login_form_staff';
    $this->load->view('menu/content', $data);
  }
/*
  function example(){
      $data['name'] = 'viivi';
      $this->load->view('login/login_form_staff', $data);
  }
*/
  function login(){
    $_SESSION['logged_in'] = false;
    $this->load->model('Login_model_staff');
    $givenStaffUser = $this->input->post('staff_username');
    $givenStaffPassword = $this->input->post('staff_password');
    $db_password = $this->Login_model_staff->getPassword($givenStaffUser);

    if (password_verify($givenStaffPassword, $db_password)) {
      $_SESSION['logged_in'] = true;
      $_SESSION['staff_logged_in'] = true;
      $_SESSION['staff_username'] = $givenStaffUser;
      $data['page'] = 'login/personal_page_staff';
      $this->load->view('menu/content', $data);
    }
    else {
      $_SESSION['staff_logged_in'] = false;
      redirect('login_staff/menu');
    }

  }

  function logout(){
    $_SESSION['logged_in'] = false;
    $_SESSION['staff_logged_in'] = false;
    $_SESSION['staff_username'] = "";
    $data['page'] = 'login/logout_page_staff';
    $this->load->view('menu/content', $data);
  }

}
