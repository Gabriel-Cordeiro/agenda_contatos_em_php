<?php
  
  session_start();
  require_once('../BD/mysql.php');
  require_once('homeController.php');
  require_once("../model/contatoModel.php");
 
  if(empty($_POST['nome_contato']))
  {
    echo "<script language='javascript' type='text/javascript'>alert('Nome não pode estar vazio');window.location.href='../Views/novoContato.php';</script>";

  }
  else if(empty($_POST['email_contato']))
  {             
      echo "<script language='javascript' type='text/javascript'>alert('Email não pode estar vazio');window.location.href='../Views/novoContato.php';</script>";

  }

  else if(empty($_POST['telefone_contato']))
  {
    echo "<script language='javascript' type='text/javascript'>alert('Telefone não pode estar vazio');window.location.href='../Views/novoContato.php';</script>";
  }

else
{
//popula objeto contato
 $novoCliente = new contato;
 $novoCliente->id_usuario =intval($_SESSION['id_usuario']);
 $novoCliente->nome = $_POST['nome_contato']; 
 $novoCliente->sobrenome =$_POST['sobrenome_contato'];
 $novoCliente->email =$_POST['email_contato'];
 $novoCliente->telefone =$_POST['telefone_contato'];
 $novoCliente->endereco =$_POST['endereco_contato'];
 $novoCliente->bairro =$_POST['bairro_contato'];
 $novoCliente->cidade =$_POST['cidade_contato'];
 $novoCliente->cep =$_POST['cep_contato'];




 $novoCliente->insertContato($novoCliente);
}

?>