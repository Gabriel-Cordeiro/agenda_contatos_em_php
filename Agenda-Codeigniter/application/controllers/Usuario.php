<?php

class Usuario extends CI_Controller {

	function __construct(){
		parent:: __construct();
	}

	public function index()
	{

		$this->load->view('Usuarios/CadastroUsuario');

	}

	public function Login()
	{
		
		$this->load->view('Usuarios/login');
	}

	public function Entrar(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('login', 'login', 'required',
		array('required' => 'Você deve preencher o %s.'));

		$this->form_validation->set_rules('senha', 'senha', 'required',
		array('required' => 'Você deve preencher a %s.'));

		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('Usuarios/Login', $erros);
 		}else{

			$login = $_POST['login'];
			$senha=$_POST['senha'];

			$this->load->model('Usuario_model');
			$resultado = $this->Usuario_model->pegarUsuarioPorloginESenha($login,$senha);

			if(is_null($resultado))
			{
				$erros = array('mensagens' => 'Usuário não encontrado, verifique os dados digitados');
				$this->load->view('Usuarios/Login', $erros);
			}
			else {	

				//Cria Session para o usuário informado
				$_SESSION['UsuarioID'] = $resultado->id_usuario;
				$_SESSION['login'] = $resultado->login;

				$this->load->view('Principal/principal.php');

			}

		}

	}

	public function CadastraUsuario(){
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nome', 'nome', 'required|min_length[7]',
		array('required' => 'Você deve preencher o %s.'));

		$this->form_validation->set_rules('login', 'login', 'required|min_length[7]',
		array('required' => 'Você deve preencher o %s.'));

		$this->form_validation->set_rules('senha', 'senha', 'required|min_length[7]',
		array('required' => 'Você deve preencher a %s.'));

		
		
		if ($this->form_validation->run() == FALSE) {
			           $erros = array('mensagens' => validation_errors());
			           $this->load->view('Usuarios/CadastroUsuario', $erros);
			}
	
			else {

			 $this->load->model('Usuario_model');

			 $usuario =array(

			'login'=> $_POST['login'],
			'senha'=> $_POST['senha'],
			'nome'=> $_POST['nome']
			 );

			 $this->Usuario_model->inserirUsuario($usuario);
			 $this->load->view('Usuarios/CadastroRealizado');

		}	

	}

	
}
