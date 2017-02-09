<?php
class AdminController extends CI_Controller {
    
    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->model('Job');
        $data['Jobs']=$this->Job->getAllJobs();
        $data['JobTypes']=$this->Job->getAllJobTypes(); 
        
        $this->load->view('AdminHeader');
        $this->load->view('AdminPanel',$data);
        $this->load->view('AdminFooter');
    }
    
    function test()
    {
        $UserName="chinthana@asd.com";
          $Pw="123";      
        $this->load->model('User');
        $user = $this->User->getUserType($UserName, $Pw);
        echo $user;
    }
}
    