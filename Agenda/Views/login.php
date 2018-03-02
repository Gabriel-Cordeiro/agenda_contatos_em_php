<html>

<head>
    
    <title> Login de Usuário </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/main.css"> 
    <link rel="icon" href="../img/contact.ico" >
   
</head>

<body> 

    <!-- <form method="POST" action="../Usuarios/login.php"> -->

    <div class="login-box"> 
    <img src="../img/avatar.png" class="avatar">
    <form method="POST" action="../controllers/loginController.php">

    </br> </br></br>
    <h2> Login</h2> 
    
    <p align="center"> Login : 
        <input type="text" name="login" id="login" placeholder="Enter username">
        </p>
     <p align="center">Senha : 
        <input type="password" name="senha" id="senha" placeholder="Enter password">
        </p>
        <br>
       <p> <input type="submit" value="entrar" id="entrar" name="entrar"></p>
</br></br>
        <a href="#"> Clique aqui: para um Novo cadastro</a>
    </form>
</div>


<div class="footer">
 <p> Desenvolvedores: Deybson Ferreira, Gabriel Cordeiro,Igor Gomes </br>
  @UNASP-ht</p>
</div>

</body>

</html>