<?php

  // Conecta ao Servidor PostGreSQL
// Cria a conexão
$conexaoPSQL = pg_connect("host=localhost dbname=banco_g2 user=postgres password=postgres") or die ("Não foi possível conectar ao Banco de dados.");

?>
