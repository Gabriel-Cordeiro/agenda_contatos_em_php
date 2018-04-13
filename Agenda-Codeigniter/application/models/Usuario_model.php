<?php
class Usuario_model extends CI_Model {

	public $id_usuario;
	public $login;
	public $senha;
	public $nome;


	function pegarTodos(){
	
		$query = $this->db->get('usuarios');
	
		return $query->result();
	}

	function inserirUsuario($usuario){
		
		$this->db->insert('usuarios',$usuario);
	}

	function pegarUsuarioPorloginESenha($login, $senha){		
		$query = $this->db->get_where('usuarios', array('login' => $login, 'senha' => $senha));
							
		if($query->result())
		{
			$usuarioEncontrado = new Usuario_model();
			foreach ($query->result() as $row)
			{
					$this->login = $row->login;
					$this->senha = $row->senha;
					$this->nome = $row->nome;
					$this->id_usuario = $row->id_usuario;

					return $this;
			}
		}
		else{
			return null;
		}

	}
}
?>
