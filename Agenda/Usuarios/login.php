<?php 
 require_once('../BD/mysql.php');
  
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  //$connect = mysqli_connect('127.0.0.1','root','');
  //$db = mysqli_select_db($connect,'agenda_online');
    
  if (isset($entrar)) {
             
    
      $connect = new mysql;
      $connect->conecta();

      $verifica = mysqli_query($connect->myCon,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
      
      if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:../Views/home.php");
        }
    }
?>