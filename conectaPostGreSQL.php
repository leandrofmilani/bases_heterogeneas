<?php

  // Conecta ao Servidor PostGreSQL
// Cria a conex�o
$conexaoPSQL = pg_connect("host=localhost dbname=banco_g2 user=postgres password=postgres") or die ("N�o foi poss�vel conectar ao Banco de dados.");

?>
