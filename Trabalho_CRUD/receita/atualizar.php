<?php
   //require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $idreceita = $_POST['idreceita'];
   $nome = $_POST['nome'];
   $ingredientes = $_POST['ingredientes'];
   $modopreparo = $_POST['modopreparo'];
   $tempopreparo = $_POST['tempopreparo'];
   $categoria = $_POST['categoria'];
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `receita` SET `nome`= ?, `ingredientes`= ?, `modopreparo`= ?, `tempopreparo`= ?, categoria = ?, foto = ? WHERE  `idreceita`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?, ?, ?
   $comando->bind_param("sssissi", $nome, $ingredientes, $modopreparo, $tempopreparo, $categoria, $foto, $idreceita);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







