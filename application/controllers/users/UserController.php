<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller 
{

    public function index()
    {
        $this->login_get();
    }

    public function login_get()
    {
        $title['title'] = "Login Page|Online Tindahan";

        $this->load->view('templates/header.php', $title);
        $this->load->view('user_login/login.php');
        $this->load->view('templates/footer.php');
        
    }

}