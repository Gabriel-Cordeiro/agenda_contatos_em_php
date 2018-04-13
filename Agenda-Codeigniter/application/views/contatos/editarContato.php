<?php 
header('Cache-Control: no cache');

?>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title> Novo Contato </title>
<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.min.css"); ?>'>   
<link rel="stylesheet" href='<?= base_url("/css/main.css"); ?>'>   
<?php $this->load->view('./shared/HeadercomBusca.php')?>
    
<body>


<form method="POST" action="<?= base_url(). 'index.php/Contato/atualiazarContato'; ?>" class="formCadastro">
  <!-- <div class="form-row"> </div> -->
    <h2> Editar Contato:</h2>
    <button type="submit" class="btn btn-primary">Atualizar</button>
		<!-- <form method="POST" action="<?= base_url(). 'index.php/Contato/atualiazarContato'; ?>" class="formCadastro">
		<button class="button" href="<?= base_url(). 'index.php/Contato/apagarContato'; ?>">Apagar contato</button>
		</form> -->
       <input type="hidden" name="id_contato" value="<?php echo $ContatoEscolhido['id_contato']?>">
        <div class="form-group col-md-9">
				<?php if(isset($mensagens[1])) echo $mensagens;?>
          <label for="inputEmail4">Nome</label> 
          <input type="text" class="form-control" id="nome_contato" placeholder="Nome" name="nome_contato" value ="<?php echo $ContatoEscolhido['nome']?>">
        </div>
        <div class="form-group col-md-9">
          <label for="inputPassword4">Sobrenome</label>
          <input type="text" class="form-control" id="sobrenome_contato" placeholder="Sobrenome" name ="sobrenome_contato" value ="<?php echo $ContatoEscolhido['sobrenome']?>">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">E-mail</label>
          <input type="text" class="form-control" id="email_contato" placeholder="teste@gmail.com" name="email_contato" value ="<?php echo $ContatoEscolhido['email']?>">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Telefone</label>
          <input type="text" class="form-control" id="telefone_contato" placeholder="19 967453214" name="telefone_contato" value ="<?php echo $ContatoEscolhido['telefone']?>">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" id="endereco_contato" placeholder="Rua José Paulino" name="endereco_contato" value ="<?php echo $ContatoEscolhido['endereco']?>">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Bairro</label>
          <input type="text" class="form-control" id="bairro_contato" placeholder="Cambuí" name="bairro_contato"value ="<?php echo $ContatoEscolhido['bairro']?>">
        </div>
        <div class="form-group col-md-9">
          <label for="inputAddress">Cidade</label>
          <input type="text" class="form-control" id="cidade_contato" placeholder="Campinas" name = "cidade_contato" value ="<?php echo $ContatoEscolhido['cidade']?>">
        </div>
      <div class="form-group col-md-9">
          <label for="inputCity">CEP</label>
          <input type="text" class="form-control" id="cep" placeholder="13175-342" name= "cep_contato" value ="<?php echo $ContatoEscolhido['cep']?>">
      </div>
      <div class="form-group col-md-9">
          <label for="inputCity">Whatsapp</label>
          <input type="text" class="form-control" id="cep" placeholder="00-000000000" name= "whatsapp"value ="<?php echo $ContatoEscolhido['whatsapp']?>">
					<img src="<?= base_url("img/wpp.jpg"); ?>">
      </div>
      <div class="form-group col-md-9">
          <label for="inputCity">Link: Facebook</label>
          <input type="text" class="form-control" id="cep" placeholder="@facebook" name= "facebook"value ="<?php echo $ContatoEscolhido['facebook']?>">
					<img src="<?= base_url("img/fb.jpg"); ?>">
      </div>
      
</form>

</body>

</html>
