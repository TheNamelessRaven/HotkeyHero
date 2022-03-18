<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Kezdolap extends CI_Controller{
  
  public function _construct(){
    parent::_construct();
    $this->load->database();

  }
  public insert($data){
      $this->db->insert('user',$data);
      return $this->db->insert_id();
  }