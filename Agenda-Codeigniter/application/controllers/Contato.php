<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function contatosPorId(){
		
		$id_usuario = intval($_SESSION['UsuarioID']);

		$this->load->model('Contato_model');
		$data['arrayContatos'] = $this->Contato_model->pegarTodosClientesPorIDUsuario($id_usuario);
	

		$this->load->view('contatos/Contatos', $data);
	}

	public function editarContato(){

		$ContatoEscolhido =array (
			'id_contato' => $_POST['id_contato'],
			'id_usuario'=> $_POST['id_usuario'],
			'nome' =>$_POST['nome'],
			'sobrenome' =>$_POST['sobrenome'],
			'email' =>$_POST['email'],
			'telefone' =>$_POST['telefone'],
			'endereco' =>$_POST['endereco'],
			'bairro' =>$_POST['bairro'],
			'cidade' =>$_POST['cidade'],
			'cep' =>$_POST['cep'],
			'whatsapp' =>$_POST['whatsapp'],
			'facebook' =>$_POST['facebook']
			 );
		$data["ContatoEscolhido"] = $ContatoEscolhido; 

		$this->load->view('contatos/editarContato',$data);
	}

	public function cadastrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome_contato', 'Nome', 'required',
		array('required' => 'Você deve preencher  %s.'));

		$this->form_validation->set_rules('email_contato', 'Email', 'required',
		array('required' => 'Você deve preencher a %s.'));

		$this->form_validation->set_rules('telefone_contato', 'Telefone', 'required',
		array('required' => 'Você deve preencher a %s.'));

		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('contatos/novoContato', $erros);
 		}else{

			$id_usuario = intval($_SESSION['UsuarioID']);

			$contato =array (
				'id_usuario'=> $id_usuario,
				'nome' =>$_POST['nome_contato'],
				'sobrenome' =>$_POST['sobrenome_contato'],
				'email' =>$_POST['email_contato'],
				'telefone' =>$_POST['telefone_contato'],
				'endereco' =>$_POST['endereco_contato'],
				'bairro' =>$_POST['bairro_contato'],
				'cidade' =>$_POST['cidade_contato'],
				'cep' =>$_POST['cep_contato'],
				'whatsapp' =>$_POST['whatsapp'],
				'facebook' =>$_POST['facebook']
				 );
				 

			$this->load->model('Contato_model');
			$this->Contato_model->inserirContato($contato);
			$this->load->helper('url');
			$this->load->view('contatos/novoContato');

		 	}
	}

public function atualiazarContato()
	{
		$id_usuario = intval($_SESSION['UsuarioID']);
		$contato =array (
			'id_contato' =>$_POST['id_contato'], 
			'id_usuario'=> $id_usuario,
			'nome' =>$_POST['nome_contato'],
			'sobrenome' =>$_POST['sobrenome_contato'],
			'email' =>$_POST['email_contato'],
			'telefone' =>$_POST['telefone_contato'],
			'endereco' =>$_POST['endereco_contato'],
			'bairro' =>$_POST['bairro_contato'],
			'cidade' =>$_POST['cidade_contato'],
			'cep' =>$_POST['cep_contato'],
			'whatsapp' =>$_POST['whatsapp'],
			'facebook' =>$_POST['facebook']
			 );
			 $data["ContatoEscolhido"] = $contato; 
			 

		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome_contato', 'Nome', 'required',
		array('required' => 'Você deve preencher  %s.'));

		$this->form_validation->set_rules('email_contato', 'Email', 'required',
		array('required' => 'Você deve preencher a %s.'));

		$this->form_validation->set_rules('telefone_contato', 'Telefone', 'required',
		array('required' => 'Você deve preencher a %s.'));

		if ($this->form_validation->run() == FALSE) {
			 $erros = array('mensagens' => validation_errors());
			 $data["erros"] = $erros;
			 $this->load->view('contatos/editarContato', $data);
 		}else{

			$id_usuario = intval($_SESSION['UsuarioID']);

			$this->load->model('Contato_model');
			$this->Contato_model->atualiazarContato($contato);
			$this->load->helper('url');
			$this->contatosPorId();

		 }

	}

	public function apagarContato(){

		$id_contato = $_POST['id_contato'];
		echo $id_contato;

		// $this->load->model('Contato_model');
		// $this->Contato_model->deletarContato($id_contato);
	}

}
