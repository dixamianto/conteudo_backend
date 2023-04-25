<?php

    //importa o arquivo de conexão
    require_once "../conexao.php";

    //cria uma variável com um comando SQL
    $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('Iara Ribeiro', 'admin1234', '123');";

    //prepara o comando para ser executado no mysql
    $comando = $conexao->prepare($SQL);

    //executa o comando
    $comando->execute();


    
