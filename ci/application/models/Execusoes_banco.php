<?php

class Execusoes_banco extends CI_ModeL { 

	function __contruct(){ 
		parent::__contruct();
	}

    /*function login($user, $pass){

		$this->db->where('nome',$user);
		$this->db->where('senha', $pass);
		$query = $this->db->get('login_cadastro');
		
	 return $query->result();
	 if ($query->num_rows == 1) { 
		return true;
		}
	}
	
}