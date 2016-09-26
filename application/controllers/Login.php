<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 11:13
 */
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->library('session');
        $this->load->model('users_model', 'user');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index(){
	    $data = array(); // CONTENT FOR THE VIEW

        if(!$this->user->isLogged()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if($this->form_validation->run() == false){
                $data['error'] = validation_errors();
            }else{
                $this->user->setUsername($this->input->post('username'));
                $this->user->setPassword($this->input->post('password'), $this->input->post('password'));

                $this->user->doLogin();

                $data['error'] = null;
                redirect('/');
            }

            $this->load->view('login', $data);
        }else{
            $data['username'] = $this->session->name;
            $data['email'] = $this->session->email;

            $this->load->view('home', $data);
        }
    }
    public function logout(){
        $this->user->doLogout();
        redirect('/');
    }
}
