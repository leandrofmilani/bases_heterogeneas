<?php
//Processa as bases de dados .xml e .csv

//carrega xml
$xml = simplexml_load_file('bases/xml.xml');

//carrega csv
$csv = csv_to_array();


function csv_to_array($filename='bases/csv.csv', $delimiter=';')
	{
	    if(!file_exists($filename) || !is_readable($filename))
	        return FALSE;

	    $header = NULL;
	    $data = array();
	    if (($handle = fopen($filename, 'r')) !== FALSE)
	    {
	        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
	        {
	            if(!$header)
	                $header = $row;
	            else
	                $data[] = array_combine($header, $row);
	        }
	        fclose($handle);
	    }
	    return $data;
	}


 // Este arquivo conecta um banco de dados MySQL - Servidor = localhost
  $servidor="127.0.0.1"; // Indique o nome do servidor de banco de dados
  $nomeBanco="banco_g2"; // Indique o nome do banco de dados que sera aberto
  $usuario="root"; // Indique o nome do usuario que tem acesso
  $senha=""; // Indique a senha do usuario
  // 1° passo - Conecta ao Servidor MySQL
  if(!($conexaoMSQL = mysql_connect($servidor,$usuario,$senha))) {
     echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL.".mysql_error($conexao);
     exit;
  }

  // 2° passo - Seleciona o BAnco de Dados
  if(!($conexao_bd = mysql_select_db($nomeBanco,$conexaoMSQL))) {
     echo "Não foi possível selecionar o banco especificado.".mysql_error($conexao);
     exit;
  }


// Conecta ao Servidor PostGreSQL
// Cria a conexão
$conexaoPSQL = pg_connect("host=localhost dbname=banco_g2 user=postgres password=postgres") or die ("Não foi possível conectar ao Banco de dados.");

?>