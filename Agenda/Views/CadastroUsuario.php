<html>

<head>
    
    <title> Cadastro </title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/main.css"> 
    <link rel="icon" href="../img/contact.ico" >
    <?php include('../php/HeaderInicio.php'); ?>
   
</head>

<body> 

    <!-- <form method="POST" action="../Usuarios/login.php"> -->

    <div class="loginCadastro-box"> 
    <img src="../img/avatar.png" class="avatar">
    <form method="POST" action="../controllers/loginController.php">

    </br> </br></br>
    <h3> Cadastrar Novo usuário</h3> 
    
    <p align="center"> Email : </br>
        <input type="Text" name="Email" id="email" placeholder="@email.com" id="email">
        </p>
     <p align="center">Nome de usuário : </br>
        <input type="Text" name="login" id="login" placeholder="Enter usarname">
        </p>

        <p align="center">Senha : </br>
        <input type="password" name="senha" id="senha" placeholder="Enter password">
        </p>

        <br>
       <p> <input type="submit" value="Cadastrar" id="Cadastrar" name="Cadastrar"></p>
       <a href="../Views/login.php"> Voltar para Login</a>
    </form>
</div>


<div class="footer">
 <p> Desenvolvedores: Deybson Ferreira, Gabriel Cordeiro,Igor Gomes </br>
  @UNASP-ht</p>
</div>

</body>

</html>