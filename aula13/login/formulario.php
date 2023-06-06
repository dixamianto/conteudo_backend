<?php
   require_once "../login/validar.php";
   require_once "../template/cabecalho.php";
   require_once "../template/menu_restrito.php";
?>


<div class="container">

    <h1>Área Restrita</h1>
    <hr>
    <?php if(isset($erro_login)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $erro_login; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form action="formulario.php" method="post" enctype="multipart/form-data">
        
        <label class="form-label">Login</label>
        <input class="form-control" type="text" name="login">

        <label class="form-label">Senha</label>
        <input class="form-control" type="password" name="senha">
        
        <br>
        
        <button type="submit" class="btn btn-primary">
            Entrar
        </button> 
    </form>

</div>

<?php require_once "../template/rodape.php" ;?>