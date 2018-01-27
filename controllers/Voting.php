<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('vote_model');
  }

  function index(){
    //redirect(base_url('landing'));
    $this->load->view('front/voting',array('alert' => ''));
  }

  function ticket(){
    $t = $this->security->xss_clean($this->input->post());
    if ($this->vote_model->checkUniqueTicket($t['unique'])->num_rows() != 0) {
      if ($this->vote_model->checkVotingStatus($t['unique'])->num_rows() != 0) {
        $this->load->view('front/voting',array('alert' => 'Kode tiket ini sudah melakukan voting.'));
      }else {
        $this->load->view('front/form-voting',array('ticket' => $t['unique']));
      }
    }else {
      $this->load->view('front/voting',array('alert' => '<h4 class="mailing-list-heading">'.$t['unique'].' : Kode tiket ini tidak ditemukan.</h4'));
    }
  }

  function submit(){
    $data = $this->input->post();
    if ($this->vote_model->checkUniqueTicket($data['unique']->result_array()) != NULL) {

    }else{

    }
  }
}
