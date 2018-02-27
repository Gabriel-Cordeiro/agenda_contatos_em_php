<?php

class homeController
{

  function loginView()
  {
      header('Location: Views/login.php');
  }

  function homeView()
  {
      header('Location: ../Views/home.php');
  }

}

?>