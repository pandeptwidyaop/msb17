<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function checkUniqueTicket($unique){
    $this->db->select('ticket_number');
    $this->db->from('tbl_tickets');
    $this->db->where('unique_ticket',$unique);
    return $this->db->get();
  }

  public function checkVotingStatus($unique){
    $this->db->select('*');
    $this->db->from('tbl_voting');
    $this->db->where('unique_ticket',$unique);
    return $this->db->get();
  }

  public function submitVoting($unique, $candidate){
    return $this->db->update('tbl_tickets', $candidate, "unique_ticket = $unique");
  }
}
