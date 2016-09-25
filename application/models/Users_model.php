<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Fabio Soares
 * Date: 25/09/2016
 * Time: 16:56
 */
class Users_model extends CI_Model{

    private $username;
    private $email;
    private $password;

    private static $table = 'users';

    public function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->helper('security');
    }

    public function insert(){
        $query = 'INSERT INTO `users` SET `name` = ?, `email` = ?, `password_hash` = ?;';
        if($this->db->query($query, array($this->username, $this->email, $this->password))){
            return true;
        }else{
            return false;
        }
    }

    public function setData($data){
        $this->setUsername($data['username']);
        $this->setEmail($data['email']);
        $this->setPassword($data['password'], $data['passwordRepeat']);
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password, $passowrdRepeat){
        if($password == $passowrdRepeat){
            $this->password = do_hash($password);
        }
    }

    public function getArrayContent(){
        return array(
                'username'          => $this->username,
                'password'          => $this->password,
                'passwordRepeat'    => $this->password,
                'email'             => $this->email
            );
    }

}
