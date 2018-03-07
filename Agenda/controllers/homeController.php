<?php


class homeController
{

  function TelaPrincipalView()
  {
    header('Location: Views/telaprincipal.php');
      
  }

  function homeView($id_usuario)
  {
    session_start();
    $_SESSION['id_usuario'] = $id_usuario;
    header('Location: ../Views/novoContato.php');
  
  }

}

?>