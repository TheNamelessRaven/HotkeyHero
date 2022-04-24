<?php

defined('BASEPATH') or exit ("No direct script allowed");
class Kezdolap extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('Users');
    
  }
  
  
  public function index()
  {
        $this->load->view('head',['oldal'=>'kezdolap']);
        $this->load->view('welcome');
        $this->load->view('foot');

      }
      public function agreement(){
        $this->load->view('head');
        $this->load->view('agreement');
        $this->load->view('foot');
      }    
      public function logout()
      {
        $this->session->sess_destroy();
        redirect('belepes');
      }
    
  public function regisztracio()
  {
   if ($this->session->userdata('user')!==NULL){
      redirect('belepes');
   }
   else{
    $this->load->view('head',['oldal'=>'regisztracio']);
    $this->load->view('regisztracio');
    $this->load->view('foot');
   }
  }
  public function belepes()
  {
    
    $this->load->view('head',['oldal'=>'belepes']);
    $this->load->view('belepes');
    $this->load->view('foot');
  }
  public function download(){
    
    $this->load->view('head',['oldal'=>'download']);
    $this->load->view('download');
    $this->load->view('foot');
    
  }
  public function profile(){

    $this->load->model('Users');
    $data["fetch_data"]=$this->Users->fetch_data();
    $this->load->view('head',['oldal'=>'profile']);
    $this->load->view('profile',$data);
    $this->load->view('foot');
    $this->load->library('form_validation');
    
  }
  public function admin(){
  
    //redirect(belepes);
      $this->load->view('head');
      $this->load->view('admin');
      $this->load->view('foot');
      $this->load->library('form_validation');
  }
  public function profile_post(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('password','password','trim|required');
    $this->form_validation->set_rules('password_change','password_chane','trim|required|matches[password]');
    $this->form_validation->set_rules('password_change','password_change','trim|required|matches[password_change2]');
  }
  public function ranglista(){
    $this->load->model('Rangs');
    $data["fetch_data"]=$this->Rangs->fetch_data();
    $this->load->view('head',['oldal'=>'ranglista']);
    $this->load->view('ranglista',$data);
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
    else{
    $data=[
      'email'=>$this->input->post('email'),
      'username'=>$this->input->post('username'),
      'password'=>password_hash($this->input->post('password'),PASSWORD_BCRYPT)
    ];
    $id=$this->users->insert($data);
    $this->session->set_flashdata('success',"Sikeres regisztráció!");
    redirect('');
  }
  }
  public function belepes_post(){
    
    $success=false;
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','username','trim|required');
    $this->form_validation->set_rules('password','password','trim|required');
    
    //frontend védelem :)
    if($this->form_validation->run()==FALSE){
      $this->session->set_flashdata('error',validation_errors());
      $this->session->set_flashdata('last_request',$this->input->post());
      redirect('belepes');
    }
      //Username kezelés
      $username=$this->input->post('username');

      $user=$this->users->login($username); //adatbázisból való lekérdezés
      
      if (empty($username)){
        $this->session->set_flashdata('error','Hibás felhasználónév vagy jelszó!');
        $this->session->set_flashdata('last_request',$this->input->post());
        redirect('belepes');
      }
      
      //jelszó kezelés
      $password= $this->input->post('password');

      if(!password_verify($password,$user['password'])) {
        $this->session->set_flashdata('error','Hibás felhasználónév vagy jelszó!');
        $this->session->set_flashdata('last_request',$this->input->post());
        redirect('belepes');
      }
      $array= array('user'=>$user);
      $this->session->set_userdata($array);
      redirect('belepes') ;
      $this->session->set_flashdata('success',"Sikeres bejelentkezés!");
      
      }
    }


?>