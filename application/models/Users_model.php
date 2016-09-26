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

    private $table = 'users';

    private $errors = array();
    private $info = array();

    public function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->helper('security');
        $this->load->library('session');
    }

    public function insert(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where('email', $this->getEmail());
        if($this->db->get()->num_rows() == 0){
            $this->db->select("*");
            $this->db->from($this->table);
            $this->db->where('name', $this->getUsername());
            if($this->db->get()->num_rows() == 0){
                if($this->db->insert($this->table, array('name' => $this->username, 'email' => $this->email, 'password_hash' => $this->password))){
                    // Success message
                    $this->info[]   = "You were registred with success.";
                }else{
                    // Database error
                    $this->errors[] = "Database Error";
                }
            }else{
                // Already have this username
                $this->errors[]     = "Username already registered";
            }
        }else{
            // Already have this email
            $this->errors[]         = "Email already registered";
        }
    }

    public function doLogin(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where('name', $this->getUsername());
        $result = $this->db->get();
        
        if($result->num_rows() == 1){
            $user = $result->result_array()[0];

            if($user['password_hash'] == $this->password){
                $_SESSION['name']       = $user['name'];
                $_SESSION['email']      = $user['email'];
                $_SESSION['loggedin']   = true;
            }else{
                $this->errors[] = "Wrong password";
            }
        }else{
            $this->errors[] = "User do not exists";
        }
    }
    public function doLogout(){
        $_SESSION['name']       = null;
        $_SESSION['email']      = null;
        $_SESSION['loggedin']   = false;

        $this->session->sess_destroy();
    }
    public function setData($data){
        $this->setUsername($data['username']);
        $this->setEmail($data['email']);
        $this->setPassword($data['password'], $data['passwordRepeat']);
    }

    public function isLogged(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            return true;
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username){
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email){
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password, $passwordRepeat){
        if($password == $passwordRepeat){
            $this->password = do_hash($password);
        }else{
            $this->errors[] = "Password don't match";
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

    /**
     * @return string
     */
    public function getErrors(){
        $string = "";
        foreach ($this->errors as $error){
            $string .= "<p>".$error."</p>\n";
        }
        if($string == ""){
            return null;
        }
        return $string;
    }

    /**
     * @return string
     */
    public function getInfo(){
        $string = "";
        foreach ($this->info as $info){
            $string .= "<p>".$info."</p>\n";
        }
        if($string == ""){
            return null;
        }
        return $string;
    }

}
