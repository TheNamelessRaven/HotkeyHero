<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Kezdolap extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    //$this->load->library('session');
    $this->load->model('users');
  }
  
  public function index()
  {
        $this->load->view('head',['oldal'=>'kezdolap']);
        $this->load->view('welcome');
        $this->load->view('foot');

      }
  public function regisztracio()
  {
    $this->load->view('head',['oldal'=>'regisztracio']);
    $this->load->view('regisztracio');
    $this->load->view('foot');
  }
  public function belepes()
  {
    $this->load->view('head',['oldal'=>'belepes']);
    $this->load->view('belepes');
    $this->load->view('foot');
  }
  public function information()
  {
    $this->load->view('head',['oldal'=>'informacio']);
    $this->load->view('information');
    $this->load->view('foot');
  }
  public function regisztracio_post(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('username','username','trim|required|is_unique[user.username]');
    $this->form_validation->set_rules('password','password','trim|required');
    $this->form_validation->set_rules('password_conf','password_conf','trim|required|matches[password]');

    if($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors()); //frissítésig tárolja az adatokat flashdata
      $this->session->set_flashdata('last_request',$this->input->post());
      redirect('regisztracio');
    }
    $data=[
      'email'=>$this->input->post('email'),
      'username'=>$this->input->post('email'),
      'password'=>password_hash($this->input->post('password'),PASSWORD_BCRYPT)
    ];
    $id=$this->users->insert($data);
    $this->session->set_flashdata('success',"Sikeres regisztráció!");
    redirect('');
  }
}
?>