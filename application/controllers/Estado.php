<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Estado_model', 'estados');
	}

	public function index()
	{

		$dados = [

			'options_estados' 	=> 	$this->estados->selectoptionsEstados(),
			'title_page'		=>	'Estados e Municipios do Brasil - CodeIgniter'
		];

		$this->load->view('home', $dados);
	}
}
