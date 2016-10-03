<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rh extends CI_Controller {

	
	public function index()
	{
		$data['content'] = 'rh/home';
		
		$this->load->view('includes/base', $data);
	}

	public function avaliacao_usuario()
	{
		$data['content'] = 'rh/usuario_avaliacao';
		$this->load->view('includes/base', $data);
	}
	

	public function avaliacao_2()
	{
		$data['content'] = 'rh/avaliacao_2';
		$this->load->view('includes/base', $data);
	}

	public function chamada()
	{
		$data['content'] = 'rh/chamada';
		$this->load->view('includes/base', $data);
	}

	public function gerenciar_membro()
	{
		$data['content'] = 'rh/gerenciar_membro';
		$this->load->view('includes/base', $data);
	}

	public function cadastrar_membro()
	{
		$data['content'] = 'rh/cadastrar_membro';
		$this->load->view('includes/base', $data);
	}

	public function criar_reuniao()
	{
		$data['content'] = 'rh/criar_reuniao';
		$this->load->view('includes/base', $data);
	}

	public function salvar_reuniao(){
		$data = $this->input->post();
		
		
		echo json_encode(
			array('status' => "NOK")
		);
	}

	public function horario_fixo(){
		$data['content'] = 'horario_fixo';
		$this->load->view('includes/base', $data);
	}

	
}

