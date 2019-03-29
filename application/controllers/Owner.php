<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Owner extends CI_Controller{
public function __construct()
{
parent::__construct();
//Codeigniter : Write Less Do More
}
function add_owner(){
$data['page']='owners/add_form';
$this->load->view('menu/content',$data);
}
}
