<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 11:13
 */
class Register extends CI_Controller {

    public function index(){
        $data = array(); // CONTENT FOR THE VIEW

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passwordRepeat', 'Password Repeat', 'trim|required');

        if($this->form_validation->run() == false){
            $data['error'] = validation_errors();
        }else{
            $data['error'] = null;
        }

        $this->load->view('register', $data);
    }

}