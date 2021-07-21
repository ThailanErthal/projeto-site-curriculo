<?php

class Execusoes_banco extends CI_ModeL { 

	function __contruct(){ 
		parent::__contruct();
	}

    function login($user, $pass){
		$this->db->where('user',$user);
		$this->db->where('senha', $pass);
		$query = $this->db->get('login_cadastro', 1);
	
	if ($query->num_rows == 1) :
            return true; 		
	else:
		return false;
	endif;
	}

	function cadastro(array $data = null, $user, $email){
		$this->db->where('user',$user) || $this->db->where('email', $email);
		$query = $this->db->get('login_cadastro', 1);
	
	if ($query->num_rows == 1) :
            return false; 		
	else:
		$this->db->insert('login_cadastro',$data);
		return $this->db->insert_id();
	endif;
	}

	function contato(array $data = null){
		$this->db->get('login_cadastro');
		$this->db->insert('contato', $data);
		return $this->db->insert_id();
	}

}
