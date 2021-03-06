<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  $this->load->model('Owners_model');
    //Codeigniter : Write Less Do More
  }

    function index(){
    //$data['page']='owners/add_form';
    $data['page']='login/personal_page_owner';
    $this->load->view('owners/owner_content',$data);
    //$this->load->view('owners/add_form');
    }
    function add_form(){
    //$data['page']='owners/add_form';
    $data['page']='owners/add_form';
    $this->load->model('Owners_model');

    $this->load->view('menu/content',$data);
    //$this->load->view('owners/add_form');
    }
    function add_owner(){
      //print_r($this->input->post());

      $this->load->model('Owners_model');
      $this->load->model('Animals_model');
      $hashedPassword=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
      $insert_data=array(
        "owner_id"=>$this->input->post('owner_id'),
        "owner_fname"=>$this->input->post('fname'),
        "owner_lname"=>$this->input->post('lname'),
        "owner_phone"=>$this->input->post('phone'),
        "owner_birthday"=>$this->input->post('birthday'),
        "owner_username"=>$this->input->post('username'),
        "owner_password"=>"$hashedPassword"
      );
      $data['new_owner_id']=$this->input->post('owner_id');
      $data['new_id']=$this->Animals_model->getNewId()+1;
      $result=$this->Owners_model->add_owner($insert_data);
      $data['set_arrival']=$this->input->post('set_arrival');
      $data['set_depart']=$this->input->post('set_depart');
      $data['set_species']=$this->input->post('set_species');
      $page=$result ? 'animals/add_form' : 'owners/error';
      $this->load->view($page,$data);

    }
    function transfer_animal_value(){
      $this->load->model('Owners_model');
        $data['new_owner_id']=$this->Owners_model->getNewId()+1;
        $data['set_arrival']=$this->input->post('arrival');
        $_SESSION['arrival']=$this->input->post('arrival');
        $data['set_depart']=$this->input->post('depart');
        $_SESSION['depart']=$this->input->post('depart');
        $data['set_species']=$this->input->post('species');
        $_SESSION['species']=$this->input->post('species');
        $this->load->view('owners/add_form',$data);
    }

  function show_owner()
{
  $data['owner']=$this->Owners_model->get_owner_users();
  $data['page']='owners/show_owner';
  $this->load->view('staff/staff_content',$data);

}

function show_owner2()
{

$data['owner']=$this->Owners_model->get_owner();
$data['page']='owners/show_owner2';
$this->load->view('owners/owner_content',$data);

}


function add_owner_user_form(){
  $data['page']='owners/add_owner_user_form';
  $this->load->model('Owners_model');
  $data['new_id']=$this->Owners_model->getNewId()+1;
  $this->load->view('menu/content',$data);
}
function add_owner_user(){
  //print_r($this->input->post());
  $this->load->model('Owners_model');
  $hashedPassword=password_hash($this->input->post('owner_password'),PASSWORD_DEFAULT);
  $insert_data=array(
    "owner_id"=>$this->input->post('owner_id'),
    "owner_fname"=>$this->input->post('owner_fname'),
    "owner_lname"=>$this->input->post('owner_lname'),
    "owner_phone"=>$this->input->post('owner_phone'),
    "owner_username"=>$this->input->post('owner_username'),
    "owner_password"=>$hashedPassword,
    "owner_birthday"=>$this->input->post('owner_birthday')
  );
  $data['new_id']=$this->input->post('owner_id');
  $result=$this->Owners_model->add_owner_user($insert_data);
  $data['page']='welcome_message';
  $this->load->view('menu/content',$data);
}

function owner_logged_in(){
  $data['page']='welcome_message';
  $this->load->view('owners/owner_content',$data);

}
function edit_owner(){
  $id=$this->input->post('id');
  $update_data=array(
    "owner_fname" => $this->input->post('owner_fname'),
    "owner_lname" => $this->input->post('owner_lname'),
    "owner_phone" => $this->input->post('owner_phone'),
    "owner_birthday" => $this->input->post('owner_birthday')
  );
  $result=$this->Owners_model->edit_owner($update_data,$id);
  if ($result==1) {
    redirect('owner/show_owner');
  }
  else {
    $data['page']='owners/show_owner';
    $this->load->view('staff/staff_content', $data);
  }
}
function show_edit($id){
$data['owner']=$this->Owners_model->get_chosen($id);
$data['current_id']=$id;
$data['page']='owners/edit_form';
$this->load->view('staff/staff_content',$data);
}

}
?>
