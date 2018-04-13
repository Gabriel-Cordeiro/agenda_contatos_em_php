
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title> Easy Contact </title>
<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.min.css"); ?>'>   
<link rel="stylesheet" href='<?= base_url("/css/main.css"); ?>'>   
<link rel="icon" href='<?= base_url("img/contact.ico"); ?>'> 
<?php $this->load->view('./shared/Header')?>
</head>
<body>
<div class="telaprincipal">

        <h1> Easy Contact</h1>
    <div id="imagensLogo">
	    <img src="<?= base_url("img/contact.ico"); ?> " width="50">
        <img src="<?= base_url("img/wpp.jpg"); ?>" width="50">
		<img src="<?= base_url("img/fb.jpg"); ?>" width="50">	
    </div>
    <ul>
        <li>Facilite sua vida com uma agenda de contatos Online:</li>
        <p>
        Esta é uma solução de problemas que provavelmente afeta um grande número de pessoas.<br>
        Quem nunca perdeu seus contatos?<br>
        Faça sua transferência, seus contatos ficarão mais seguros online.
        </p>
        <li> Acesse onde você estiver:</li>
        <p>Você poderá acessá-los em qualquer lugar, onde você estiver.<br>
         Basta estar conectado ao Easy Contact, e seus dados poderão ser acessados<br>
         independente onde você estiver.</hr>
         Ao realizar seu Login, seus dados salvos serão automaticamentes atualizados, para você.
        </p>
        <li> Salve contatos Pessoais ou Empresariais</li>
        <p> Salve dados como, telefone, whatsapp, facebook, e demais informações</p>

    </ul>

    
</div>

<div class="telaprincipal-left">


 <form method="POST" action="<?= base_url(). 'index.php/Usuario/Entrar'; ?>">
        <h2> Login</h2> 
         <p> Login : <input type="text" name="login" id="login" placeholder="Enter username"></p>
         <p>Senha : <input type="password" name="senha" id="senha" placeholder="Enter password"></p>
        <br>
       <input type="submit" value="Entrar" id="entrar" name="entrar">
       <p>
        <a href= "index.php/Usuario" > Comece GRATIS!.. </a>
    </p>
</form>

</div>
</body>

</html>
