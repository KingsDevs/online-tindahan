<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller 
{

    public function index()
    {
        $title['title'] = "Login Page|Online Tindahan";

        $this->load->view('templates/header.php', $title);
        $this->load->view('user_login/login.php');
        $this->load->view('templates/footer.php');
    }

    public function login_get()
    {
        $title['title'] = "Login Page|Online Tindahan";

        $this->load->view('templates/header.php', $title);
        $this->load->view('user_login/login.php');
        $this->load->view('templates/footer.php');
        
    }

    public function register_get()
    {
        $title['title'] = "Register Page|Online Tindahan";

        $this->load->view('templates/header.php', $title);
        $this->load->view('user_login/register.php');
        $this->load->view('templates/footer.php');
    }

    public function register_post()
    {
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['user_name'] = $this->input->post('user_name');
        $data['password'] = $this->input->post('password');

        $this->load->model('UserModel');
        $this->UserModel->register($data);

        redirect('login');
    }

}