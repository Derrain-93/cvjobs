<?php

class JobsController extends CI_Controller {

    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->view('Header');
        $this->load->view('PostJobs');
        $this->load->view('Footer');
    }

    public function PostJob() {
        $this->load->helper(array('form', 'url'));

        $CompanyName = $this->input->post('CompanyName');
        $CompanyEmail = $this->input->post('CompanyEmail');
        $JobTitle = $this->input->post('JobTitle');
        $JobDescription = $this->input->post('JobDescription');
        $JobLocation = $this->input->post('JobLocation');
        $JobSalary = $this->input->post('JobSalary');
        $CloseDate = $this->input->post('CloseDate');
        $OpenDate = $this->input->post('OpenDate');
        //echo $CompanyName,$CompanyEmail,$JobTitle,$JobDescription,$JobDescription,$JobLocation,$JobSalary,$CloseDate,$OpenDate;

       

        $this->load->model('Job');
        $this->Job->addJob($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobLocation, $JobSalary, $JobSalary, $CloseDate, $OpenDate);
        $maxId = $this->Job->GetMaxJobtId();
        
         $config['upload_path'] = './Assets/Uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = $maxId;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            //  $error = array('error' => $this->upload->display_errors());
            //   $this->load->view('upload_form', $error);
        } else {
            //$data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
        }
      
        $this->load->helper('form');
        $this->load->view('Header');
        $this->load->view('PostJobs');
        $this->load->view('Footer');        
    }
    
   
    
     
   public function loadHome()
   {
       if(!$_SESSION['username'])
       {
            $user['username']="unRegUser";
            $this->session->set_userdata('username', $user['username']);
       }
       else           
       {
           
       }
       
  
       $this->load->helper(array('form', 'url'));
//       $this->load->view('Header');
//       $this->load->view('index');
//       $this->load->view('Footer');
       
       $this->load->model('Job');
       $data['Jobs']=$this->Job->getAllJobs();
       $data['JobTypes']=$this->Job->getAllJobTypes();   
       $this->load->view('header');
        $this->load->view('index',$data);
       $this->load->view('Footer');
   }
   
   public function loadContactUs()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->view('Header');
       $this->load->view('ContactUs');
       $this->load->view('Footer');
   }
   public function loadSingleJob()
   {
       $this->load->helper(array('form', 'url'));
       $this->load->view('Header');
       $this->load->view('CompleteJobDetail');
       $this->load->view('Footer');
   }
   public function loadAllJobs()
   {
       $this->load->model('Job');
       $data['Jobs']=$this->Job->getAllJobs();
       $this->load->view('header');
        $this->load->view('index',$data);
       $this->load->view('Footer');
   }

}
