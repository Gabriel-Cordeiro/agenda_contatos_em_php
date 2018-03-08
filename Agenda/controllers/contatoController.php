<?php
  
  session_start();
  require_once('../BD/mysql.php');
  require_once('homeController.php');
  require_once("../model/contatoModel.php");
 
  if(empty($_POST['nome_contato']))
  {
    echo "<script language='javascript' type='text/javascript'>alert('Nome não pode estar vazio');window.location.href='../Views/Contatos.php';</script>";

  }
  else if(empty($_POST['email_contato']))
  {             
      echo "<script language='javascript' type='text/javascript'>alert('Email não pode estar vazio');window.location.href='../Views/Contatos.php';</script>";

  }

  else if(empty($_POST['telefone_contato']))
  {
    echo "<script language='javascript' type='text/javascript'>alert('Telefone não pode estar vazio');window.location.href='../Views/Contatos.php';</script>";
  }

else
{
//popula objeto contato
 $dadosContato = new contato;
 $dadosContato->id_usuario =intval($_SESSION['id_usuario']);
 $dadosContato->nome = $_POST['nome_contato']; 
 $dadosContato->sobrenome =$_POST['sobrenome_contato'];
 $dadosContato->email =$_POST['email_contato'];
 $dadosContato->telefone =$_POST['telefone_contato'];
 $dadosContato->endereco =$_POST['endereco_contato'];
 $dadosContato->bairro =$_POST['bairro_contato'];
 $dadosContato->cidade =$_POST['cidade_contato'];
 $dadosContato->cep =$_POST['cep_contato'];
 $dadosContato->whatsapp =$_POST['whatsapp'];
 $dadosContato->facebook =$_POST['facebook'];
 $dadosContato->id_contato =$_POST['id_contato'];





 $dadosContato->updateContato($dadosContato);
}

?>