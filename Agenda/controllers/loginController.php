<?php
  require_once('../BD/mysql.php');
  require_once('homeController.php');

 $login = $_POST['login'];
 $senha = $_POST['senha'];

 $logincontroller = new loginController();
 $logincontroller->validaLogin($login,$senha);
 

class loginController
{
    function validaLogin($login,$senha)
    {
        $connect = new mysql;
        $connect->conecta();
  
        $verifica = mysqli_query($connect->myCon,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        
        if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../Views/login.php';</script>";
            die();
          }else{
           
           $home = new homeController();
           $home->homeView();

            // setcookie("login",$login);
            // header("Location:../Views/home.php");
          }
    }

}

?>