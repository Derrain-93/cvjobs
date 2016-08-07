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
         $this->load->helper('form');
          $this->load->view('Header');
        $this->load->view('index');
        $this->load->view('Footer');
            
       
    }

}
