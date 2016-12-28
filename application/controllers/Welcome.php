<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array(
                'error' => ''
            );
        $this->load->helper(array('form', 'url'));
       $this->load->model('Job');
       $data['Jobs']=$this->Job->getAllJobs();
        $this->load->view('Header');
        $this->load->view('index',$data);
        $this->load->view('Footer');
    }

}
