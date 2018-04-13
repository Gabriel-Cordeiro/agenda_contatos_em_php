<?php 
header('Cache-Control: no cache');
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
	// Redireciona o visitante de volta pro login
	echo 'teste';
  header("Location: index.php"); exit;
}

?>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title> Novo Contato </title>
<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.min.css"); ?>'>   
<link rel="stylesheet" href='<?= base_url("/css/main.css"); ?>'>  
<link rel="icon" href='<?= base_url("img/contact.ico"); ?>'> 
<?php $this->load->view('./shared/HeadercomBusca')?>

<title> Bem vindo </title>

<body>

</head>

<body>
</br></br></br>

</body>

</html>
