
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

  <?php
session_start();
$id_usuario = $_SESSION['id_usuario']; //coloco em $erro os dados da sessao..
?>



<form method="POST" action="../controllers/novoContatoController.php" class="formCadastro">
  <!-- <div class="form-row"> </div> -->
    <h2> Cadastro de contatos:</h2>
        <div class="form-group col-md-9">
          <label for="inputEmail4">Nome</label> 
          <input type="text" class="form-control" id="nome_contato" placeholder="Nome" name="nome_contato">
        </div>
        <div class="form-group col-md-9">
          <label for="inputPassword4">Sobrenome</label>
          <input type="text" class="form-control" id="sobrenome_contato" placeholder="Sobrenome" name ="sobrenome_contato">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">E-mail</label>
          <input type="text" class="form-control" id="email_contato" placeholder="teste@gmail.com" name="email_contato">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Telefone</label>
          <input type="text" class="form-control" id="telefone_contato" placeholder="19 967453214" name="telefone_contato">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" id="endereco_contato" placeholder="Rua José Paulino" name="endereco_contato">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Bairro</label>
          <input type="text" class="form-control" id="bairro_contato" placeholder="Cambuí" name="bairro_contato">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Cidade</label>
          <input type="text" class="form-control" id="cidade_contato" placeholder="Campinas" name = "cidade_contato">
        </div>
      <div class="form-group col-md-9">
          <label for="inputCity">CEP</label>
          <input type="text" class="form-control" id="cep" placeholder="13175-342" name= "cep_contato">
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>





</body>

</html>
