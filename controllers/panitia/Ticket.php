<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){

  }

  function generateTicketsA($count,$length,$prefix,$letter='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'){
    for ($i=0; $i < $count ; $i++) {
      $r = '';
      for ($j=0; $j < $length ; $j++) {
        $r .= $letter[rand(0,strlen($letter)-1)];
      }
      echo ($prefix.$r);
      echo "<br>";
    }
    return 0;
  }

  function generateTicketsB($count,$length,$prefix,$letter1='ABCDEFGHIJKLMNOPQRSTUVWXYZ',$letter2='123456789'){
    for ($i=0; $i < $count ; $i++) {
      $ra = '';
      $rb = '';
      for ($j=0; $j < $length ; $j++) {
        $ra .= $letter1[rand(0,strlen($letter1)-1)];
      }
      for ($j=0; $j < $length; $j++) {
        $rb .= $letter2[rand(0,strlen($letter2)-1)];
      }
      echo ($prefix.$ra.$rb);
      echo "<br>";
    }
    return 0;
  }


}
