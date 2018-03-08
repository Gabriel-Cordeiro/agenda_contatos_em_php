<?php
header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR.utf8');
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
<title> Contatos </title>
<link rel="stylesheet" href="../css/bootstrap.min.css"> 
<link rel="stylesheet" href="../css/main.css"> 
<link rel="icon" href="../img/contact.ico" >
<?php include('../php/HeadercomBusca.php'); ?>
    </head>
<body>
<body>
</br></br></br>
<?php
if(!empty($contatos))
{
foreach($contatos as $contato){
  ?>
<form method="post" id="contatoEscolhido" action="../Views/editarContato.php">
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
      <th scope="row"><img src="../img/avatar.png" alt="Smiley face" height="42" width="42"><?php echo $contato->id_contato?></th>
      <td><input type="hidden" name="nome" value="<?php echo $contato->nome?>"><?php echo $contato->nome?></td>
      <td><input type="hidden" name="sobrenome" value="<?php echo $contato->sobrenome?>"><?php echo $contato->sobrenome?></td>
      <td><input type="hidden" name="telefone" value="<?php echo $contato->telefone?>"><?php echo $contato->telefone?></td>
      <td><input type="hidden" name="email" value="<?php echo $contato->email?>"><?php echo $contato->email?></td>
      <td><input type="hidden" name="endereco" value="<?php echo $contato->endereco?>"></td>
      <td><input type="hidden" name="bairro" value="<?php echo $contato->bairro?>"></td>
      <td><input type="hidden" name="cidade" value="<?php echo $contato->cidade?>"></td>
      <td><input type="hidden" name="cep" value="<?php echo $contato->cep?>"></td>
      <td><input type="hidden" name="whatsapp" value="<?php echo $contato->whatsapp?>"></td>
      <td><input type="hidden" name="facebook" value="<?php echo $contato->facebook?>"></td>
      <td><input type="hidden" name="id_contato" value="<?php echo $contato->id_contato?>"></td>



      <td><button type="submit" class="btn btn-primary" name="submit" value="submit">Mais informações</button></td>
    </tr>
  </tbody>
</table>
</form>
<?php
}
}?>

    <!-- <form method="POST" action="">
        <label>Cadastrar novo contato</label>
        <input type="submit" value="Novo contato" id="cadastrar_contato" name="cadastrar_contato">
    </form> -->

</body>

</html>