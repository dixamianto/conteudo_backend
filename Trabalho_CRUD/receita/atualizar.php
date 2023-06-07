<?php
   //require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $idreceitas = $_POST['idreceitas'];
   $nome = $_POST['nome'];
   $ingredientes = $_POST['ingredientes'];
   $modopreparo = $_POST['modopreparo'];
   $tempopreparo = $_POST['tempopreparo']

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `receita` SET `nome`= ?, `ingredientes`= ?, `modopreparo`= ?, `tempopreparo` WHERE  `idreceitas`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssii", $nome, $ingredientes, $modopreparo, $tempopreparo, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







