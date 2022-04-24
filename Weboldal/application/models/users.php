<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Users extends CI_Model{
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->database();
    $username;
  }
  public function insert($data){
      $this->db->insert('user',$data);
      return $this->db->insert_id();
  }
  public function login($username){
    $this->db->where('username',$username);
    return $this->db->get('user')->row_array();
  }
  public function fetch_data(){
    $query=$this->db->get('user');
    $query=$this->db->query(
    'SELECT username,email FROM `user` WHERE username="Alma"
    ');
    return $query;
}
}
