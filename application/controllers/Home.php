<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}

	public function homepage(){
		$data['content'] = 'home';
		$this->load->view('includes/base', $data);
	}
}

