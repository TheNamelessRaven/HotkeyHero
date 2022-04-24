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
        $query=$this->db->query(
        'SELECT user.username,difficulty.Difficulty_name,map.map_name,Points FROM `rang`
        INNER JOIN map ON map.ID=rang.map_id
        INNER JOIN user ON user.ID=rang.username_id
        INNER JOIN difficulty ON difficulty.ID=rang.difficulty_id
        GROUP BY Points desc;');
        return $query;
        //$select=
  }
}
 

