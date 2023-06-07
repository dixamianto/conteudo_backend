<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";
//verificar o que vai ser usado como uma busca geral
   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM receita where tempopreparo like ?";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //pega o valor assunto via GET pela URL
   //ou um valor em branco
   $tempopreparo = $_GET['tempopreparo'] ?? "";
   $tempopreparo = "%$tempopreparo%";

   //vincula a variavel $tempopreparo com o param ? no SQL 
   $comando->bind_param("i", $tempopreparo);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultado
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $receitas = [];
   while ($receita = $resultados->fetch_object()){
      $receitas[] = $receita;
   }
   







