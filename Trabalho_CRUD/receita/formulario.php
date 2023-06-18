<?php
    require_once "consultar_por_id.php";
    require_once "../template/menu_unico.php";
    require_once "../template/cabecalho.php";
?>

<div class="container">
    <div class="">
    <a href="index.php" class="btn btn-danger">
        Cancelar
    </a><br><br>
    </div>
    <h1>Cadastro de Receitas</h1>
    <hr>

    <form action="<?php echo isset($receita) ? "atualizar.php" : "inserir.php";?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="idreceita" value="<?php echo $receita->idreceita ?? "" ;?>"><br>

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $receita->nome ?? "" ;?>"><br>

        <label class="form-label">Ingredientes</label><br>
        <textarea class="form-control" name="ingredientes"><?php echo $receita->ingredientes ?? "";?></textarea><br>
        
        <label class="form-label">Modo de Preparo</label><br>
        <textarea class="form-control" name="modopreparo"><?php echo $receita->modopreparo ?? "";?></textarea><br>

        <label class="form-label">Tempo Preparo</label><br>
        <input class="form-control" type="text" name="tempopreparo" placeholder="Tempo em Minutos" value="<?php echo $receita->tempopreparo ?? "" ;?>"><br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="categoria" value="<?php echo $receita->categoria ?? "" ;?>"><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br><br>

        <button class="btn btn-dark" type="submit">Inserir</button>
        
    </form>
    </div>
    <?php require_once "../template/rodape.php";?>
