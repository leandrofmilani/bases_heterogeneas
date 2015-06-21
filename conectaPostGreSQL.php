<?php

  // Este arquivo conecta um banco de dados MySQL - Servidor = localhost
  $servidor="localhost"; // Indique o nome do servidor de banco de dados
  $nomeBanco="banco_g2"; // Indique o nome do banco de dados que sera aberto
  $usuario="root"; // Indique o nome do usuario que tem acesso
  $senha="postgres"; // Indique a senha do usuario

  // Conecta ao Servidor PostGreSQL

  /*if(!($conexaoPSQL = pg_connect("host=".$servidor.", dbname=".$nomeBanco.", user=".$usuario.", password=".$senha.""))) {
    if(!($conexaoPSQL = pg_connect("host=127.0.0.1, dbname=banco_g2, 
 user=root,  password=postgres"))) {
     echo "Não foi possível estabelecer uma conexão com o gerenciador PostGreSQL.";
     exit;
  }*/
?>
