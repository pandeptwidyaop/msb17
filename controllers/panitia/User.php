<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
  }

  function index(){

  }

  function login(){

  }

  function logout(){

  }

}
