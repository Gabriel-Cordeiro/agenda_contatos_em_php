<html>

<head>
    
    <title> Login de Usuário </title>
	<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.min.css"); ?>'>   
    <link rel="stylesheet" href='<?= base_url("/css/main.css"); ?>'>   

	<?php $this->load->view('./shared/Header')?>
   
</head>

<body> 
    <div class="login-box"> 
	<img src="<?= base_url("img/avatar.png"); ?>" class="avatar">
        <form method="POST" action="<?= base_url(). 'index.php/Usuario/Entrar'; ?>">
		<?php if(isset($mensagens)) echo $mensagens; ?>
        <h2> Login</h2> 
         <p> Login : <input type="text" name="login" id="login" placeholder="Enter username"></p>
         <p>Senha : <input type="password" name="senha" id="senha" placeholder="Enter password"></p>
        <br>
       <p> <input type="submit" value="Entrar" id="entrar" name="entrar"></p>
</br></br>
        <a href="../Usuario"> Clique aqui: para um Novo cadastro</a>
    </form>
</div>


<div class="footer">
 <p> Desenvolvedores: Deybson Ferreira, Gabriel Cordeiro,Igor Gomes </br>
  @UNASP-ht</p>
</div>

</body>

</html>
