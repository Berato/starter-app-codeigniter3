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
    }

    public function index(){
	    $data = array(); // CONTENT FOR THE VIEW

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false){
            $data['error'] = validation_errors();
        }else{
            $data['error'] = null;
        }

		$this->load->view('login', $data);
	}
}
