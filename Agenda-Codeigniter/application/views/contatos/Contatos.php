<?php 
header('Cache-Control: no cache');

?>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title> Contatos </title>
<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.min.css"); ?>'>   
<link rel="stylesheet" href='<?= base_url("/css/main.css"); ?>'>   
<?php $this->load->view('./shared/HeadercomBusca.php')?>
    </head>
<body>
<body>
</br></br></br>
<?php foreach ($arrayContatos as $contato) { ?>
<form method="post" id="contatoEscolhido" action="<?= base_url(). 'index.php/Contato/editarContato'; ?>">
<table class="table table-dark">
  <thead>

    <tr>  
      <th scope="col">Codigo Contato</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
			<img src="<?= base_url("img/avatar.png"); ?> " alt="Smiley face" height="42" width="42"><?php echo $contato['id_contato']?></th>
      <td><input type="hidden" name="nome" value="<?php echo $contato['nome']?>"><?php echo $contato['nome']?></td>
      <td><input type="hidden" name="sobrenome" value="<?php echo $contato['sobrenome']?>"><?php echo $contato['sobrenome']?></td>
      <td><input type="hidden" name="telefone" value="<?php echo $contato['telefone']?>"><?php echo $contato['telefone']?></td>
      <td><input type="hidden" name="email" value="<?php echo $contato['email']?>"><?php echo $contato['email']?></td>
      <td><input type="hidden" name="endereco" value="<?php echo $contato['endereco']?>"></td>
      <td><input type="hidden" name="bairro" value="<?php echo $contato['bairro']?>"></td>
      <td><input type="hidden" name="cidade" value="<?php echo $contato['cidade']?>"></td>
      <td><input type="hidden" name="cep" value="<?php echo $contato['cep']?>"></td>
      <td><input type="hidden" name="whatsapp" value="<?php echo $contato['whatsapp']?>"></td>
      <td><input type="hidden" name="facebook" value="<?php echo $contato['facebook']?>"></td>
      <td><input type="hidden" name="id_contato" value="<?php echo $contato['id_contato']?>"></td>
			<td><input type="hidden" name="id_usuario" value="<?php echo $contato['id_usuario']?>"></td>
      <td><button type="submit" class="btn btn-primary" name="submit" value="<?php echo $contato['id_contato']?>">Mais informações</button></td>
    </tr>
  </tbody>
</table>
</form>

<?php } ?>

    <!-- <form method="POST" action="">
        <label>Cadastrar novo contato</label>
        <input type="submit" value="Novo contato" id="cadastrar_contato" name="cadastrar_contato">
    </form> -->

</body>

</html>
