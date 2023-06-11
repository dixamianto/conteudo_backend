<?php
    //importa o arquivo de conxeção
    require_once "../banco/conexao.php";
    
//verificar se foi enviado valor pelo campo de pesquisa
    $pesquisa = $_POST['pesquisa'];

   //cria uma variável com um comando SQL
    $SQL = '';
    
    //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //pega o valor assunto via GET pela URL
   //ou um valor em branco
   //$assunto = $_GET['assunto'] ?? "";
   //$assunto = "%$assunto%";

   //vincula a variavel $pesquisa com o param ? no SQL 
   $comando->bind_param("s", $pesquisa);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultado
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $receitas = [];
   while ($receita = $resultados->fetch_object()){
      $receitas[] = $receita;
   }