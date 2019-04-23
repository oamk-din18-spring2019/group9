<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Stay_model');
    $this->load->model('Animals_model');

  }

function show_animals(){
  $data['animal']=$this->Animals_model->get_animals();
  $data['page']='animals/show_animals';
  $this->load->view('staff/staff_content',$data);
}
function show_animal(){
  $data['animal']=$this->Animals_model->get_animal();
  $data['page']='animals/show_animal';
  $this->load->view('owners/owner_content',$data);
}
  function add_animal_form(){
    $data['page']='animals/add_form';
    $this->load->model('Animals_model');
    $data['new_id']=$this->Animals_model->getNewId()+1;
    $this->load->view('menu/content',$data);
  }


  function add_animal(){
    //$this->load->model('Animals_model');
    $this->load->model('Stay_model');
    $insert_animal=array(
      "animal_id"=>$this->input->post('animal_id'),
      "animal_name"=>$this->input->post('animal_name'),
      "animal_species"=>$this->input->post('animal_species'),
      "animal_description"=>$this->input->post('animal_description'),
      "animal_food"=>$this->input->post('animal_food'),
      "animal_medical"=>$this->input->post('animal_medical'),
      "animal_instruction"=>$this->input->post('animal_instruction')
    );
    $result1=$this->Animals_model->add_animal($insert_animal);
    //price and $room_id
    $this->load->model('Room_model');
    //find free room
    $id_free_room=$this->Room_model->get_free_id($_SESSION['arrival'], $_SESSION['depart'], $_SESSION['species']);
  //  $stay_duration=$this->Room_model->stay_duration($id_free_room);
    $stay_duration= round(abs(strtotime($_SESSION['depart']) - strtotime($_SESSION['arrival']))/86400);

    //echo 'duration = '.$stay_duration;

    $price=$this->calculate_price($stay_duration, $id_free_room);
  //  echo 'price ='.$price;
    $insert_stays=array(
      "animal_id"=>$this->input->post('animal_id'),
      "owner_id"=>$this->input->post('owner_id'),
      "stay_price"=>$price,
      "room_id"=>$id_free_room,
      "checkin"=>$this->input->post('animal_arrival'),
      "checkout"=>$this->input->post('animal_depart')
    );
    $result2=$this->Stay_model->add_stay($insert_stays);
    $page=$result1 ? 'animals/confirmation' : 'animals/error';
    $this->load->view($page);
  }


  function add_new_animal_form(){
    $this->load->model('Stay_model');
    $data['page']='animals/new_add_form';
    $this->load->model('Animals_model');
    $data['new_id']=$this->Animals_model->getNewId()+1;
    $this->load->view('owners/owner_content',$data);
  }

  function add_new_animal(){
    //$this->load->model('Animals_model');
    $this->load->model('Stay_model');
    $insert_animal=array(
      "animal_id"=>$this->input->post('animal_id'),
      "animal_name"=>$this->input->post('animal_name'),
      "animal_species"=>$this->input->post('animal_species'),
      "animal_description"=>$this->input->post('animal_description'),
      "animal_food"=>$this->input->post('animal_food'),
      "animal_medical"=>$this->input->post('animal_medical'),
      "animal_instruction"=>$this->input->post('animal_instruction')
    );
    $result1=$this->Animals_model->add_animal($insert_animal);
    //price and $room_id
    $this->load->model('Room_model');
    //find free room
    $id_free_room=$this->Room_model->get_free_id($_SESSION['arrival'], $_SESSION['depart'], $_SESSION['species']);
  //  $stay_duration=$this->Room_model->stay_duration($id_free_room);
    $stay_duration= round(abs(strtotime($_SESSION['depart']) - strtotime($_SESSION['arrival']))/86400);

    //echo 'duration = '.$stay_duration;

    $price=$this->calculate_price($stay_duration, $id_free_room);
  //  echo 'price ='.$price;
    $insert_stays=array(
      "animal_id"=>$this->input->post('animal_id'),
      "owner_id"=>$this->input->post('owner_id'),
      "stay_price"=>$price,
      "room_id"=>$id_free_room,
      "checkin"=>$_SESSION['arrival'],
      "checkout"=>$_SESSION['depart']
    );
    $result2=$this->Stay_model->add_stay($insert_stays);
    $page=$result1 ? 'animals/confirmation' : 'animals/error';
    $this->load->view($page);
  }


  function calculate_price($duration, $room_id) {
    if ($room_id < 10) {
      return 40 * $duration;
    }
    else  {
      return 50 * $duration;
    }
  }

  function edit_animal(){
    $this->load->model('Animals_model');
    $id=$this->input->post('id');
    $update_data=array(

      "animal_species"=>$this->input->post('animal_species'),
      "animal_description"=>$this->input->post('animal_description'),
      "animal_food"=>$this->input->post('animal_food'),
      "animal_medical"=>$this->input->post('animal_medical'),
      "animal_instruction"=>$this->input->post('animal_instruction')
    );
    /*  $result1=$this->Animals_model->add_animal($insert_animal);
    $insert_stays=array(
      "animal_id"=>$this->input->post('animal_id'),
      "owner_id"=>$this->input->post('owner_id'),
      "check_in"=>$this->input->post('check_in'),
      "check_out"=>$this->input->post('check_out')
    );
   $result2=$this->Stay_model->add_stay($insert_stays);
    $page=$result1 ? 'animals/confirmation_of_new_animal' : 'animals/error';
    $this->load->view($page);*/
    $result=$this->Animals_model->edit_animal($update_data,$id);
    if ($result==1) {
      redirect('animal/show_animals');
    }
    else {
      $data['page']='animals/edit_error';
      $this->load->view('staff/staff_content',$data);
    }
  }
  function show_edit($id){
    $this->load->model('Animals_model');
  $data['animal']=$this->Animals_model->get_chosen($id);
  $data['current_id']=$id;
  $data['page']='animals/edit_form';
  $this->load->view('animals/animal_content',$data);
  }



}
