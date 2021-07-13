<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.

class Projeto extends MY_Controller { //A classe sempre deve ter o mesmo nome do arquivo controller

	function __construct() {
		parent::__construct();
		
	}

	public function index(){
		
		$this->render('index');
	}
    public function login(){  
        $this->load->model('execusoes_banco');
        $user = $this->input->post('login');  
        $pass = $this->input->post('senha');
        $res = $this->execusoes_banco->login($user, $pass);
        if ($res == true){  
            $this->render('index');
        }  
        else{  
			echo  'Your Account is Invalid';
        }
    }
    public function cadastro(){
    $this->load->model('execusoes_banco');
    $user = $this->input->post('user');  
    $email = $this->input->post('email');    
    $data = $this->input->post(null, true);
    $res = $this->execusoes_banco->cadastro($data, $user, $email);
    if ($res == true){  
        echo 'id salvo';
    }  
    else{  
        echo  'conta existente';
        }
    }

}


