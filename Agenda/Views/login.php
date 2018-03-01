<html>

<head>
    <title> Login de Usuário </title>
</head>

<body>
    <!-- <form method="POST" action="../Usuarios/login.php"> -->
    <form method="POST" action="../controllers/loginController.php">
        <label>Login:</label>
        <input type="text" name="login" id="login">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" id="senha">
        <br>
        <input type="submit" value="entrar" id="entrar" name="entrar">
    </form>
</body>

</html>