<?php

  // Este arquivo conecta um banco de dados MySQL - Servidor = localhost
  $servidor="127.0.0.1"; // Indique o nome do servidor de banco de dados
  $nomeBanco="banco_g2"; // Indique o nome do banco de dados que sera aberto
  $usuario="root"; // Indique o nome do usuario que tem acesso
  $senha=""; // Indique a senha do usuario

  // 1� passo - Conecta ao Servidor MySQL

  if(!($conexaoMSQL = mysql_connect($servidor,$usuario,$senha))) {
     echo "N�o foi poss�vel estabelecer uma conex�o com o gerenciador MySQL.".mysql_error($conexao);
     exit;
  }

  // 2� passo - Seleciona o BAnco de Dados

  if(!($conexao_bd = mysql_select_db($nomeBanco,$conexaoMSQL))) {
     echo "N�o foi poss�vel selecionar o banco especificado.".mysql_error($conexao);
     exit;
  }

?>
