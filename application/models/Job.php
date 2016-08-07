<?php

class Job extends CI_Model {

    function addJob($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobLocation, $JobSalary, $JobSalary, $CloseDate, $OpenDate){
        
      
        $query2 = "INSERT INTO jobs(companyName, companyEmail, title,description, location, salary, closeDate,openDate) values(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($query2, array($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobSalary,$CloseDate, $OpenDate));

        
    }
     function GetMaxJobtId()
		{
			//$query6 = "SELECT MAX(postId) FROM posts";
			//$this->db->query($query6);
			$this->db->select_max('id');
			$query=$this->db->get('jobs');
                        $result = $query->row();
                        return $result->id;
                        
                        
			//return $query->result_array();
		}

}
