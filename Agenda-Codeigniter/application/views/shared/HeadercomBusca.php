

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href='<?= base_url("index.php/Principal/index"); ?>'>Easy Contact</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  href='<?= base_url("index.php/Contato/cadastrar")?>'>Novo Contato</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href='<?= base_url("index.php/Contato/contatosPorId")?>'>Contatos</a>
      </li>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite um nome para buscar contato" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


      <li class="nav-item">
        <a class="nav-link"  href='<?= base_url("index.php/Usuario/Login")?>'>Logoff</a>
      </li>
    
    
  </ul>
  </div>
</nav>
