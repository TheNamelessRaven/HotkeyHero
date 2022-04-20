<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Users extends CI_Model{
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->database();
  }
  public function insert($data){
      $this->db->insert('user',$data);
      return $this->db->insert_id();
  }
  public function login($username){
    $this->db->where('username',$username);
    return $this->db->get('user')->row_array();
  }
}
