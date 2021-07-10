<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.

class Projeto extends MY_Controller { //A classe sempre deve ter o mesmo nome do arquivo controller

	function __construct() {
		parent::__construct();
		
	}

	public function index(){
		
		$this->render('index');
	}
		public function process()  
    {  
        $user = $this->input->post('login');  
        $pass = $this->input->post('senha');  
        if ($user=='juhi' && $pass=='123')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
			$this->render('index');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
			echo  'Your Account is Invalid';
        }  
    }

	}


