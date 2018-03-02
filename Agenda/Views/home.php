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

<div>   </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Bem vindo </title>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Agenda Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novoContato.php">Novo Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contatos</a>
      </li>
    </ul>
  </div>
</nav>
</head>

<body>

<?php
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
      <th scope="row"><?php echo $contato->id_contato?></th>
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
}?>

    <!-- <form method="POST" action="">
        <label>Cadastrar novo contato</label>
        <input type="submit" value="Novo contato" id="cadastrar_contato" name="cadastrar_contato">
    </form> -->

</body>

</html>