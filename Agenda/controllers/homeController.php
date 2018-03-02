<?php


class homeController
{

  function loginView()
  {
      header('Location: Views/login.php');
  }

  function homeView($id_usuario)
  {
    session_start();
    $_SESSION['id_usuario'] = $id_usuario;
    header('Location: ../Views/home.php');
  }

}

?>