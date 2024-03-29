<?php 
    require "consultar_todos.php";
    require_once "../template/menu.php";
    require_once "../template/cabecalho.php";
?>

    <div class="container">
    <h1>Receitas</h1> 
    <hr>
  <div class="text-end">
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a>
    </div>
    <table class="table" id="tabela_dados">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scoope="col">Categoria</th>
            <th scope="col">foto</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($receitas as $receita): ?>
        <tr>
            <td><?= $receita -> nome ?></td>
            <td><?= $receita -> categoria ?></td>
            <td><img src="../uploads/<?= $receita->foto ?>" height="30px"></td>
            <td class="text_end" width="25%">
              <a href="excluir.php?id=<?= $receita -> idreceita ?>" class="btn btn-danger"> 
                <i class="fa-solid fa-trash-can"></i> 
                Excluir
              </a>

              <a href="formulario.php?id=<?= $receita -> idreceita ?>" class="btn btn-primary"> 
                <i class="fa-solid fa-pen-to-square"></i> 
                Atualizar
              </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
    </table>

    </div>

    <?php require_once "../template/rodape.php"; ?>
