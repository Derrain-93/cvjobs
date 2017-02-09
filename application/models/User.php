<?php

class User extends CI_Model {

    function login($UserName, $Pw) {
        $where = array(
            'username' => $UserName,
            'pw' => $Pw,
        );
        $this->db->select()->from('users')->where($where);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    
    function getUserType($UserName,$Pw)
    {
          $where = array(
            'username' => $UserName,
            'pw' => $Pw,
        );
        $this->db->select()->from('users')->where($where);
        $query = $this->db->get();
        return $query->row('role');
    }
    
    
    function regUser($CompanyName,$CompanyLocation,$CompanyEmail,$Password,$Tel,$website)
    {
        $query_str="INSERT INTO users(username,pw,role,CompanyName,CompanyLocation,Tp,WebSite) values(?,?,?,?,?,?,?)";
        $userType="Normal User";
        $this->db->query($query_str, array($CompanyEmail, $Password, $userType, $CompanyName, $CompanyLocation, $Tel, $website));
    }
    
      function GetMaxProfileId()
    {
	
        $this->db->select_max('id');
	$query=$this->db->get('users');
        $result = $query->row();
        return $result->id;			//return $query->result_array();
    }

}
