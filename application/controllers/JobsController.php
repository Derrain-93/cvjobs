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
        
        $CompanyName=$this->input->post('CompanyName');
        $CompanyEmail=$this->input->post('CompanyEmail');
        $JobTitle=$this->input->post('JobTitle');
        $JobDescription=$this->input->post('JobDescription');
        $JobLocation=$this->input->post('JobLocation');
        $JobSalary=$this->input->post('JobSalary');       
        $CloseDate=$this->input->post('CloseDate');
        $OpenDate=$this->input->post('OpenDate');
        //echo $CompanyName,$CompanyEmail,$JobTitle,$JobDescription,$JobDescription,$JobLocation,$JobSalary,$CloseDate,$OpenDate;
        
        
        $this->load->model('Job');
        $this->Job->addJob($CompanyName,$CompanyEmail,$JobTitle,$JobDescription,$JobLocation,$JobLocation,$JobSalary,$JobSalary,$CloseDate,$OpenDate);            
        $this->load->helper('form');
        $this->load->view('Header');
        $this->load->view('PostJobs');
        $this->load->view('Footer');
//            
       
    }

}
