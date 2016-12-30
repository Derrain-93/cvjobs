<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('Header');
        $this->load->view('Login');
        $this->load->view('Footer');
    }

    public function authenticate() {
        $UserName = $this->input->post('email');
        $Pw = $this->input->post('pwd');


        $this->load->model('User');
        $user = $this->User->login($UserName, $Pw);
        if (!$user) {
            $data = array(
                'error' => 'Login Error'
            );
              $this->load->helper(array('form', 'url'));
            $this->load->view('Header');
            $this->load->view('Login', $data);
            $this->load->view('Footer');
        } else {

            $data = array(
                'error' => ''
            );
            
            $this->session->set_userdata('username', $user['username']);
            $this->load->helper(array('form', 'url'));
            $this->load->model('Job');
            $data['Jobs']=$this->Job->getAllJobs();
            $data['JobTypes']=$this->Job->getAllJobTypes();    
            $this->load->view('Header');
            $this->load->view('index',$data);
            $this->load->view('Footer');
        }
    }
    
     public function checkIsLogged()
    {
        if($_SESSION['username'] =="unRegUser")
        {     
            $data = array(
                'error' => 'Please Login'
            );
                      
            $this->load->view('Header');
            $this->load->view('Login',$data);
            $this->load->view('Footer');
        
        }
        else
        {
            $this->load->view('Header');
            $this->load->view('PostJobs');
            $this->load->view('Footer');         
        }
    }

}
