<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Users extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  public function insert($data){
      $this->db->insert('user',$data);
      return $this->db->insert_id();
  }
}
