<?php
class Contato_model extends CI_Model {
	
	const id_cliente = 0;
	const id_usuario = 0;
	const nome = "";
	const sobrenome = "";
	const email = "";
	const telefone = "";
	const endereco = "";
	const bairro = "";
	const cidade = ""; 
	const cep = "";
    const whatsapp = "";
	const facebook = "";
	
	function inserirContato($contato){

		$this->db->insert('contatos',$contato);
	}

	function atualiazarContato($contato){

	$this->db->replace('contatos', $contato);

	}

	function deletarContato($id_contato){
		$this->db->where('id_contato', $id_contato);
		$this->db->delete('contatos');
	}


	function pegarTodosClientesPorIDUsuario($id_usuario){		
		
		$query = $this->db->get_where('contatos', array('id_usuario' => $id_usuario));
		return $array = $query->result_array();
		
	}

}

?>
