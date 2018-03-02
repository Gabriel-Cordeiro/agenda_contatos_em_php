<?php

class usuario
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
           
            while($row = $verifica->fetch_assoc()) {
                $id_usuario =  $row["id_usuario"];
            }
           $home = new homeController();
           $home->homeView($id_usuario);

            setcookie("login",$login);
            setcookie("id_usuario",$id_usuario);
            //header("Location:../Views/home.php");

            $connect->fechar($connect->myCon);
          }
    }
}


?>