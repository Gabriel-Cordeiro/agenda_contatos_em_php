<html>

<head>
    
    <title> Login de Usuário </title>
	<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.min.css"); ?>'>   
    <link rel="stylesheet" href='<?= base_url("/css/main.css"); ?>'>   
    <link rel="icon" href='<?= base_url("img/contact.ico"); ?>'> 
	<?php $this->load->view('./shared/Header')?>
   
</head>

<body> 

    <!-- <form method="POST" action="../Usuarios/login.php"> -->

    <div class="loginCadastro-box"> 
	<img src="<?= base_url("img/avatar.png"); ?>" class="avatar">
    <form method="POST" action="/agenda-codeigniter/index.php/Usuario/CadastraUsuario">

    </br> </br></br>
    <h3> Cadastrar Novo usuário</h3> 
    <?php if(isset($mensagens)) echo $mensagens; ?>
    <p align="center"> Nome : </br>
        <input type="Text" name="nome" id="nome" placeholder="João da Silva">
        </p>
     <p align="center">Nome de usuário : </br>
        <input type="Text" name="login" id="login" placeholder="Enter usarname">
        </p>

        <p align="center">Senha : </br>
        <input type="password" name="senha" id="senha" placeholder="Enter password">
        </p>

        <br>
       <p> <input type="submit" value="Cadastrar" id="Cadastrar" name="Cadastrar"></p>
       <a href="/agenda-codeigniter/index.php/Usuario/Login"> Voltar para Login</a>
    </form>
</div>


<div class="footer">
 <p> Desenvolvedores: Deybson Ferreira, Gabriel Cordeiro,Igor Gomes </br>
  @UNASP-ht</p>
</div>

</body>

</html>
