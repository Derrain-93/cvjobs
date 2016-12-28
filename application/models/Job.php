<?php

class Job extends CI_Model {

    function addJob($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobLocation, $JobSalary, $JobSalary, $CloseDate, $OpenDate){
        
      
        $query2 = "INSERT INTO jobs(companyName, companyEmail, title,description, location, salary, closeDate,openDate) values(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($query2, array($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobSalary,$CloseDate, $OpenDate));

        
    }
    function GetMaxJobtId()
    {
	
        $this->db->select_max('id');
	$query=$this->db->get('jobs');
        $result = $query->row();
        return $result->id;
                        
                        
			//return $query->result_array();
    }
    function getAllJobs()
    {
        //$this->db->select()->from('jobs');
        $query=$this->db->get('jobs');
        return $query->result_array();
    }
                
                

}
