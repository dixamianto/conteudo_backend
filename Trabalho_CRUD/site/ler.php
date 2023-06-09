<?php  
    include_once "../template/menu_restrito.php";
    include_once "../template/cabecalho.php";
    //include_once "../template/menu.php";
    include_once "../receita/consultar_por_id.php";
    require "../receita/ingredientes.php";
?>

<div class="container">
   <h1><?php echo $receita->nome; ?></h1>
   <hr>
   <img src="../uploads/<?php echo $receita->foto; ?>"  />
<p>
   <ul>
   <?php foreach($ingredientes as $ingrediente): ?>
        <li>
            <?php echo $ingrediente->ingredientes; ?>
       </li>
   <?php endforeach; ?>
   </ul>
   </p>

   <!--p><?php //echo $receita->ingredientes; ?></p-->
   <p><?php echo $receita->modopreparo; ?></p>
</div>

<?php  include_once "../template/rodape.php" ?>