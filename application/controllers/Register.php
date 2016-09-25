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

        $this->load->view('register');
    }

}