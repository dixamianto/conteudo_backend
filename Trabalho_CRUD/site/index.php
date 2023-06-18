<?php 
    include_once "../receita/consultar_todos.php";
    include_once "../template/menu.php";
    include_once "../template/cabecalho.php";
?>


<!-- Receitas -->
<div class="container">
<h1>Receitas</h1> 
<hr>
  <div class="row row-cols-1 row-cols-md-3 g-3">
    <?php foreach($receitas as $id => $receita): ?>
          <div class="col">
            <div class="card">
                <img src="../uploads/<?php echo $receita->foto; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $receita->nome; ?></h5>                    
                    <a href="ler.php?id=<?php echo $receita->idreceita; ?>" class="btn btn-primary">Ler mais</a>
                </div>
            </div>
          </div>
      <?php endforeach; ?>
  </div>

</div>

<!-- Fim Receitas -->
<?php include_once "../template/rodape.php" ?>