<?php
    //importa o arquivo de conexão
    require_once "../banco/conexao.php";
//verificar o que vai ser usado como uma busca geral
   //cria uma variável com um comando SQL
   $SQL = "SELECT ingredientes FROM receita where idreceita like ?";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //pega o valor assunto via GET pela URL
   //ou um valor em branco
   $id = $_GET['id'] ?? "";


   //vincula a variavel $id com o param ? no SQL 
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultado
   $resultados = $comando->get_result();
var_dump($resultados);
   //pega todas linha de resultado da consulta
   $ingredientes = [];
   while ($ingrediente = $resultados->fetch_object()){
      $ingredientes[] = explode(",", $ingrediente, 2);
      //array_chunk($ingrediente, 2);
      //como eu arrumo isso?
      //quebrar o texto de ingrdientes para mostrar no site os ingredientes em lista
      //explode ; str_split ; chunk_split()


   }
   //$ingredientes[] = explode(" ", $ingrediente, 2);

   var_dump($resultados);
   var_dump($ingredientes);




?>