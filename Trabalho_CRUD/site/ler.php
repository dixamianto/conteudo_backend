<?php  
    include_once "../template/menu.php";
    include_once "../template/cabecalho.php";
    include_once "../receita/consultar_por_id.php";
?>

<div class="container">
   <h1><?php echo $receita->nome; ?></h1>
   <hr>
   <img height="50%" width="50%" src="../uploads/<?php echo $receita->foto; ?>"  />
   <p><strong>Tempo de preparo:</strong> <?php echo $receita->tempopreparo; ?> Min</p>

    <h5><strong>Ingredientes</strong></h5>
   <p><?php 
   $itens = explode(";", $receita->ingredientes); 
   
   ?>
   <ul>
   <?php foreach($itens as $i): ?>
        <li>
            <?php echo $i; ?>
       </li>
   <?php endforeach; ?>
   </ul>
</p>

   <h5><strong>Modo de Preparo</strong></h5>
   <p><?php 
   
   $preparo = explode(";", $receita->modopreparo); 
   ?>
   <ol>
   <?php foreach($preparo as $j): ?>
        <li>
            <?php echo $j; ?>
       </li>
   <?php endforeach; ?>
   </ol>
   </p>
</div>

<?php  include_once "../template/rodape.php" ?>