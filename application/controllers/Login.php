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
             $this->load->model('User');
            $userType = $this->User->getUserType($UserName, $Pw);
               
               if($userType=="Admin")
               {
                           $this->load->helper(array('form', 'url'));
        $this->load->model('Job');
        $data['Jobs']=$this->Job->getAllJobs();
        $data['JobTypes']=$this->Job->getAllJobTypes(); 
        
        $this->load->view('AdminHeader');
        $this->load->view('AdminPanel',$data);
        $this->load->view('AdminFooter');
               }
               else
               {
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
            $this->load->model('Job');
            $data['Jobs']=$this->Job->getAllJobs();
            $data['JobTypesForPosting']=$this->Job->getAllJobTypes();              
            $this->load->view('Header');
            $this->load->view('PostJobs',$data);
            $this->load->view('Footer');         
        }
    }
    
    public function Register()
    {
         $this->load->view('Header');
         $this->load->view('Register');
         $this->load->view('Footer');
         
        
    }
    
    public function RegisterNewUser()
    {
         $CompanyName = $this->input->post('compName');
         $CompanyLocation = $this->input->post('compLoc');
         $CompanyEmail = $this->input->post('compEmail');
         $Password = $this->input->post('password');
         $Tel = $this->input->post('compTel');
         $website = $this->input->post('compWeb');
         
         $this->load->model('User');
         $this->User->regUser($CompanyName,$CompanyLocation,$CompanyEmail,$Password,$Tel,$website);        
         $maxId= $this->User->GetMaxProfileId();
         
        $config['upload_path'] = './Assets/Uploads/UserProfilePic';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $maxId;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('profileImgUp')) {
            //  $error = array('error' => $this->upload->display_errors());
            //   $this->load->view('upload_form', $error);
        } else {
            //$data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
         
         
         
         
         
         
         
         
         $this->load->view('Header');
         $this->load->view('Register');
         $this->load->view('Footer');
         
    }
    
    public function destroyUser()
    {
        session_destroy();
        
          $data = array(
                'error' => ''
            );
        
        $user['username']="unRegUser";
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
