<?php
   //require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   var_dump ($_POST);

   // Verifica se o nome, ingredientes, modo de preparo e tempo de preparo foram enviados do formulario de cadastro
   if(isset($_POST['nome']) && isset($_POST['ingredientes']) && isset($_POST['modopreparo']) && isset($_POST['tempopreparo']) && isset($_POST['categoria'])){

      //verifica se o nome, ingredientes, modo de preparo e tempo de preparo foram enviado
      //do formulario de cadastro
      require_once "faz_upload.php";
      $nome = $_POST['nome'];
      $ingredientes = $_POST['ingredientes'];
      $modopreparo = $_POST['modopreparo'];
      $tempopreparo = $_POST['tempopreparo'];
      $categoria = $_POST['categoria'];
      $foto = $nome_foto;

      //cria uma variável com um comando SQL
      $SQL = "INSERT INTO `receita` (`nome`, `ingredientes`, `modopreparo`, `tempopreparo`, `categoria`, `foto`) VALUES (?, ?, ?, ?, ?, ?);";
   
      //prepara o comando para ser executado no mysql
      $comando = $conexao->prepare($SQL);

      //faz a vinculação dos parâmetros ?, ?, ?
      $comando->bind_param("sssiss", $nome, $ingredientes, $modopreparo, $tempopreparo, $categoria, $foto);

      //executa o comando
      $comando->execute();
   }
   
   //volta para o formulário
   header("Location: index.php");

   







