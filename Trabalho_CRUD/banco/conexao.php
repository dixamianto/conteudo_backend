<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "trabalho_iararibeiro";
$port = 3306;

//cria uma conexão com o mysql
$conexao = new mysqli($host, 
                      $user, 
                      $password,
                      $database,
                      $port);

//verifica se existe erros na conexão                      
if($conexao->connect_error){
    echo $conexao->connect_error;
    die();
}

