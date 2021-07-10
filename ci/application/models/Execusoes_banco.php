<?php

class Execusoes_banco extends CI_ModeL { 

	function __contruct(){ 
		parent::__contruct();
	}

    function login($user, $pass){
		if($user && $pass != NULL):
		$this->db->where('user',$user);
		$this->db->where('senha', $pass);
		$query = $this->db->get('login_cadastro', 1);
		return true;		
	else:
		return false;
	endif;
	}
}
