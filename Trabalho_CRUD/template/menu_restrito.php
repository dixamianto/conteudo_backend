<?php 
  require "../receita/consultar_categorias.php"; 
  //require "../receita/pesquisar.php";
?>
<!-- Menu principal -->
<nav class="navbar fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Trabalho de Back-End</a>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    
    
<ul class="nav justify-content-end nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../site/index.php">Site</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../receita/index.php">Controle de Receitas</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
    <ul class="dropdown-menu">
      <?php foreach($categorias as $receita): ?>
        <li class="nav-item dropdown">
          <a class="nav-link" href="index.php?assunto=<?php echo $receita->categoria; ?>">
              <?php echo $receita->categoria; ?>
          </a>
        </li>
      <?php endforeach; ?>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="../receita/formulario.php">Adicionar Nova Receita</a></li>
   </ul>
  </li>
</ul>
<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="pesquisa" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
</nav>
</div>
</nav>
<br><br>
<!-- Final do Menu -->


  



