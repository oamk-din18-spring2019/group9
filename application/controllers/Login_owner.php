<?php
defined ('BASEPATH') OR exit('No direct script access allowed');


class Login_owner extends CI_Controller
{


  function menu(){
    $data['page'] = 'login/login_form_owner';
    $this->load->view('menu/content', $data);
  }

  function login(){
    $_SESSION['logged_in']=false;
    $this->load->model('Login_model_owner');
    $givenOwnerUser = $this->input->post('owner_username');
    $givenOwnerPassword = $this->input->post('owner_password');
    $db_password = $this->Login_model_owner->getPassword($givenOwnerUser);

    if (password_verify($givenOwnerPassword, $db_password)) {
      $_SESSION['logged_in']=true;
      $_SESSION['owner_logged_in'] = true;
      $_SESSION['owner_username'] = $givenOwnerUser;
      $data['page'] = 'login/personal_page_owner';
      $this->load->view('menu/content', $data);
    }
    else {
      $_SESSION['owner_logged_in'] = false;
      redirect('login_owner/menu');
    }

  }

  function logout(){
    $_SESSION['logged_in']=false;
    $_SESSION['owner_logged_in'] = false;
    $_SESSION['owner_username'] = "";
    $data['page'] = 'login/logout_page_owner';
    $this->load->view('menu/content', $data);
  }

}