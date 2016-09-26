<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 11:13
 */
class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->library('session');
        $this->load->model('users_model', 'user');
    }

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
            $userData = array();
            $userData['username'] =         $this->input->post('username');
            $userData['email'] =            $this->input->post('email');
            $userData['password'] =         $this->input->post('password');
            $userData['passwordRepeat'] =   $this->input->post('passwordRepeat');

            $this->user->setData($userData);
            $this->user->insert();

            $data['error'] = $this->user->getErrors();
            $data['info']  = $this->user->getInfo();
        }

        $this->load->view('register', $data);
    }

}
