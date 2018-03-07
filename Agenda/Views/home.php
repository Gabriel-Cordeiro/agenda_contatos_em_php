<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require_once('../model/contatoModel.php');
require_once('../BD/mysql.php');

$id_usuario = $_SESSION['id_usuario']; //coloco em $erro os dados da sessao..

$contato = new contato;
$contatos = $contato->pegarContatosPorIdUsuario($id_usuario);

?>

<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title> Novo Contato </title>
<link rel="stylesheet" href="../css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/main.css"> 
<link rel="icon" href="../img/contact.ico" >
<?php include('../php/Header.php'); ?>
    <title> Bem vindo </title>
    
    

<body>

</head>

<body>
</br></br></br>
<?php
if(!empty($contatos))
{
foreach($contatos as $contato){
  ?>
<form method="post" id="contatoEscolhido" action="../controllers/contatoController.php">
<table class="table table-dark">
  <thead>

    <tr>  
      <th scope="col">Codigo Contato</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><img src="../img/avatar.png" alt="Smiley face"><?php echo $contato->id_contato?></th>
      <td><?php echo $contato->nome?></td>
      <td><?php echo $contato->sobrenome?></td>
      <td><?php echo $contato->telefone?></td>
      <td><?php echo $contato->email?></td>
      <td><button type="submit" class="btn btn-primary" value="<?php echo $contato->id_contato?>">Mais informações</button></td>
    </tr>
  </tbody>
</table>
</form>
<?php
}
}?>


</body>

</html>