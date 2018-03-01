<?php
session_start();
$id_usuario = $_SESSION['id_usuario']; //coloco em $erro os dados da sessao..
?>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
        <a class="nav-link" href="#">Novo Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contatos</a>
      </li>
    </ul>
  </div>
</nav>
</head>

<body>

<form method="POST" action="../controllers/novoContatoController.php">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="nome_contato" placeholder="Nome" name="nome_contato">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Sobrenome</label>
      <input type="text" class="form-control" id="sobrenome_contato" placeholder="Sobrenome" name ="sobrenome_contato">
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">E-mail</label>
    <input type="text" class="form-control" id="email_contato" placeholder="teste@gmail.com" name="email_contato">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Telefone</label>
    <input type="text" class="form-control" id="telefone_contato" placeholder="19 967453214" name="telefone_contato">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="endereco_contato" placeholder="Rua José Paulino" name="endereco_contato">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Bairro</label>
    <input type="text" class="form-control" id="bairro_contato" placeholder="Cambuí" name="bairro_contato">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Cidade</label>
    <input type="text" class="form-control" id="cidade_contato" placeholder="Campinas" name = "cidade_contato">
  </div>
  <div class="form-group col-md-4">
      <label for="inputCity">CEP</label>
      <input type="text" class="form-control" id="cep" placeholder="13175-342" name= "cep_contato">
    </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</body>

</html>
