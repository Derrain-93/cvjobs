<?php
class JobsController extends CI_Controller {
    
    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->view('Header');
        $this->load->view('AdminPannel');
        $this->load->view('Footer');
    }
}
    