<?php

class Job extends CI_Model {

    function addJob($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobLocation, $JobSalary, $JobSalary, $CloseDate, $OpenDate){
        
      
        $query2 = "INSERT INTO jobs(companyName, companyEmail, title,description, location, salary, closeDate,openDate) values(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($query2, array($CompanyName, $CompanyEmail, $JobTitle, $JobDescription, $JobLocation, $JobSalary,$CloseDate, $OpenDate));

        
    }

}
