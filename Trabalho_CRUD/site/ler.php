<?php  
    include_once "../template/menu_restrito.php";
    include_once "../template/cabecalho.php";
    //include_once "../template/menu.php";
    include_once "../receita/consultar_por_id.php";
    //require "../receita/ingredientes.php";
?>

<div class="container">
   <h1><?php echo $receita->nome; ?></h1>
   <hr>
   <img src="../uploads/<?php echo $receita->foto; ?>"  />
   <p><strong>Tempo de preparo:</strong> <?php echo $receita->tempopreparo; ?> Min</p>
<!--p>
   <ul>
   <?php //foreach($ingredientes as $ingrediente): ?>
        <li>
            <?php //echo $ingrediente->ingredientes; ?>
       </li>
   <?php //endforeach; ?>
   </ul>
   </p-->
    <h5><strong>Ingredientes</strong></h5>
   <p><?php echo $receita->ingredientes; ?></p>
   <h5><strong>Modo de Preparo</strong></h5>
   <p><?php echo $receita->modopreparo; ?></p>
</div>

<?php  include_once "../template/rodape.php" ?>