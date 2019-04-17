<?php
defined('BASEPATH') OR exit('No direct srcipt access allowed');

/**
 *
 */
class Stay extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Stay_model');
  }

  function show_Stay()
  {
    $data['Stay']=$this->Stay_model->getStay();
    $data['page']='Stay/show_stay';
    $this->load->view('staff/staff_content', $data);
  }
function add_stay(){
  //print_r($this->input->post());
  $insert_data=array(
    "owner_id"=>$this->input()->post('owner_id'),
    "animal_id"=>$this->input()->post('animal_id'),
    "room_id"=>$this->input()->post('room_id'),
    "stay_price"=>$this->input()->post('stay_price'),
    "Check_in"=>$this->input()->post('Check_in'),
    "Check_out"=>$this->input()->post('Check_out'),
  );
   $result=$this->Stay_model->add_stay($insert_data);
  if ($result==1) {
    $data['message']="You have added a new customer";
  }
  else {
    $data['message']="Something went wrong!";
  }
  $data['page']='Stay/add_info';
  $this->load->view('Stay/show_stay',$data);
}

}
?>
