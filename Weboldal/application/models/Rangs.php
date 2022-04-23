<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Rangs extends CI_Model{
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->database();
  }
  public function fetch_data(){
        $query=$this->db->get('rang');
        $query=$this->db->query('SELECT * from rang');
        return $query;
        //$select=
  }
}
