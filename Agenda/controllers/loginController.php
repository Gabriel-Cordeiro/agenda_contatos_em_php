<?php
  require_once('../BD/mysql.php');
  require_once('homeController.php');
  require_once('../model/usuarioModel.php');

 $login = $_POST['login'];
 $senha = $_POST['senha'];
 $usuario = new usuario();
 $usuario->validaLogin($login,$senha);


 //  $logincontroller = new loginController();
//  $logincontroller->validaLogin();
class loginController
{
 
 

}

?>