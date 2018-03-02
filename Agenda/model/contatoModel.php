<?php
header('Content-Type: text/html; charset=utf-8');
class contato {
	const id_usuario = 0;
	const nome = "";
	const sobrenome = "";
	const email = "";
	const telefone = "";
	const endereco = "";
	const bairro = "";
	const cidade = "";
	const cep = "";

	function insertContato($novoCliente)
    {
		$connect = new mysql;
		ini_set('default_charset', 'UTF-8'); 
        $connect->conecta();
		$connect->myCon->set_charset("utf8");	

		
        $verifica = mysqli_query($connect->myCon,"insert into contatos (id_usuario,nome,email,sobrenome,telefone,endereco,bairro,cidade,cep)
         values ( '$novoCliente->id_usuario','$novoCliente->nome','$novoCliente->email','$novoCliente->sobrenome','$novoCliente->telefone','$novoCliente->endereco','$novoCliente->bairro','$novoCliente->cidade','$novoCliente->cep')");
  

         if(mysqli_affected_rows($connect->myCon) > 0)
         {
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso');window.location.href='../Views/home.php';</script>";
            $connect->fechar();
         }
         else
         {
             echo "<script language='javascript' type='text/javascript'>alert('Cadastro não efetuado');window.location.href='../Views/novoContato.php';</script>";
         }
        
    }

    function pegarContatosPorIdUsuario($id_usuario)
    {
        $connect = new mysql;
        $connect->conecta();

        $resultado = mysqli_query($connect->myCon,"SELECT * FROM contatos WHERE id_usuario = '$id_usuario'") or die("erro ao selecionar");
        
            while($valores = $resultado->fetch_object()){
                $obj[] = $valores;
            }
        
            $connect->fechar($connect->myCon);
            return $obj;

    }
    
}


?>