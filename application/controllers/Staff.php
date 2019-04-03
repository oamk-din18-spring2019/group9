<?php

class Staff extends CI_Controller{

  public function __construct()
  {

  }
  /*
  public function getStaff(){
    $this->db->select('idStaff,fname,lname,username,');
    $this->db->from('staff');
    $this->db->
    return $this->db->get()->result_array();
  }

  function add_staff(){
      //print_r($this->input->post());
      $insert_data=array(
        "idstaff" => $this->input->post('id'),
        "fname" => $this->input->post('fn'),
        "lname" => $this->input->post('ln'),
        "email" => $this->input->post('em')
        }
*/
        function show_staff()
      {
        $this->load->model('Staff_model');
        $data['staff']=$this->Staff_model->get_staff_users();
        $data['page']='staff/show_staff';
        $this->load->view('menu/content',$data);

      }

      function add_staff_user_form(){
        $data['page']='staff/add_staff_user_form';
        $this->load->view('menu/content',$data);
      }
      function add_staff_user(){
        //print_r($this->input->post());
        $this->load->model('Staff_model');
        $hashedPassword=password_hash($this->input->post('staff_password'),PASSWORD_DEFAULT);
        $insert_data=array(
          "staff_id"=>$this->input->post('staff_id'),
          "staff_fname"=>$this->input->post('staff_fname'),
          "staff_lname"=>$this->input->post('staff_lname'),
          "staff_username"=>$this->input->post('staff_username'),
          "staff_password"=>$hashedPassword,
          "staff_hours"=>$this->input->post('staff_hours')
        );
        $result=$this->Staff_model->add_staff_user($insert_data);
        $this->load->view('menu/content',$data);
      }
}
