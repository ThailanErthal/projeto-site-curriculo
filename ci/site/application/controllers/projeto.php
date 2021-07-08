<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //Sempre deixar definido, pois se não achar o diretório vai aparecer a mensagem.

class Projeto extends MY_Controller { //A classe sempre deve ter o mesmo nome do arquivo controller

	function __construct() {
		parent::__construct();
	}

	public function index(){
		$this->render('index');
		$this->load->library('email');
		$dados_form = $this->input->post();
		$this->email->from($dados_form['email'], $dados_form['nome']);
		$this->email->to('multittam@gmail.com');
		$this->email->subject($dados_form['assunto']);
		$this->email->message($dados_form['mensagem']);
        $this->email->send();
		
		
		print_r($dados_form);
		
		
	}
}

