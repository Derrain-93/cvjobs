<?php
class User extends CI_Model {
    
	function login($UserName, $Pw)
		{
            $where=array(
				'username'=>$UserName,
				'pw'=>$Pw,
				
			);
			$this->db->select()->from('users')->where($where);
			$query=$this->db->get();
			return $query->first_row('array');
		}
}