<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');
class Api extends REST_Controller
{
       public function __construct() {
               parent::__construct();
               $this->load->model('Users');
       }
       /*    
       public function user_get(){
           $r = $this->Users->read();
           $this->response($r); 
       }
       */
       /* ellenőrizzük létezik-e és jó-e a jelszó*/
       public function user_put(){
            //$id = $this->uri->segment(3);
            $name = $this->input->get('name');
            $pass = $this->input->get('pass');
            $r = $this->Users->login($name);
            //$ret = {'success' : False};
            if(!empty($r) && password_verify($pass,$r['password']) ){ 
                //$ret = {'success' : True};
                }
            $this->response($ret); 
       }
       /*
       public function user_post(){
           $data = array('name' => $this->input->post('name'),
           'pass' => $this->input->post('pass'),
           'type' => $this->input->post('type')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       public function user_delete(){
           $id = $this->uri->segment(3);
           $r = $this->user_model->delete($id);
           $this->response($r); 
       }*/
    
}

