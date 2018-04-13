<?php
class Blog_model extends CI_Model {

	public $title;
	public $content;
	public $date;

	function pegarTodos(){
	
		$query = $this->db->get('contatos');
	
		return $query->result();
	}
}

?>
