<?php

	//Carrega as bases de dados .xml e .csv
	require_once("carrega_bases.php");
    //Conecta base de dados PostGreSQL e MySQL
    require_once("conectaMySQL.php");
    require_once("conectaPostGreSQL.php");

    
    echo "<h1><center>XML, CSV, PostGreSQL & MySQL </center></h1>";	

    echo "a) Obter o título, autor e ano de publicação de todos os livros.<br>";

    for ($l=0; $l <count($xml->livro) ; $l++) {
    	echo strval($xml->livro[$l]->titulo);
    	echo "<br>";
    	for ($a=0; $a <count($xml->livro[$l]->autor) ; $a++) { 
    		echo strval($xml->livro[$l]->autor[$a]);
    		echo "<br>";
    	}
    	echo strval($xml->livro[$l]->ano);
    	echo "<br>";
    	echo "<br>";
    }

    echo "<br><br>****<br>";

    for ($i=0; $i <count($csv) ; $i++) { 
    	echo strval($csv[$i]['Titulo']);
    	echo "<br>";
    	echo strval($csv[$i]['Autor']);
    	echo "<br>";
    	echo strval($csv[$i]['Ano']);
    	echo "<br>";
    	echo "<br>";
    }

    echo "<br>MySql:<br>";
    $sqlMysql = "SELECT * FROM `livro`;";
    $consultaLivros = mysql_query($sqlMysql,$conexaoMSQL);
    $cont=0;
    while($linha = mysql_fetch_array($consultaLivros)){
        $nomeLivro[$cont] = $linha["titulo"];
        $anoLivro[$cont] = $linha["ano"];
        echo "<h4>Titulo: ".$nomeLivro[$cont].", Autor ?, Ano:".$anoLivro[$cont]."</h4>";
        $cont++;
    }

    echo "<br>PostGreSql:<br>";
    $sqlPsql = "SELECT * FROM livro";
    // Executa a consulta SQL e traz os resultados
    $resultado = pg_exec($conexaoPSQL, $sqlPsql) or die ("Não foi possível executar a consulta");
    $cont=0;
    // Formata os resultados por linha 
    while ($linha = pg_fetch_array($resultado)) {
        $nomeLivro[$cont] = $linha["titulo"];
        $anoLivro[$cont] = $linha["ano"];
        echo "<h4>Titulo: ".$nomeLivro[$cont].", Autor ?, Ano:".$anoLivro[$cont]."</h4>";
    $cont++;
    }

    echo "b) Obter todos os dados dos livros editados em um ano específico.<br>";

    $ano = 2005;
    echo "<br>Ano Base:".$ano."<br>";

    for ($l=0; $l <count($xml->livro) ; $l++) { 
    	$result = ($xml->livro[$l]->ano);
    	if ($result == $ano) {
    		echo strval($xml->livro[$l]->titulo);
	    	echo "<br>";
	    	for ($a=0; $a <count($xml->livro[$l]->autor) ; $a++) { 
	    		echo strval($xml->livro[$l]->autor[$a]);
	    		echo "<br>";
	    	}
	    	echo strval($xml->livro[$l]->ano);
	    	echo "<br>";
	    	echo strval($xml->livro[$l]->preco);
	    	echo "<br>";
    	}
    }
    for ($i=0; $i <count($csv) ; $i++) {
    	$result = ($csv[$i]['Ano']);
    	if ($result == $ano) {
    		echo strval($csv[$i]['ISBN']);
	    	echo "<br>";
    		echo strval($csv[$i]['Titulo']);
	    	echo "<br>";
	    	echo strval($csv[$i]['Autor']);
	    	echo "<br>";
	    	echo strval($csv[$i]['Ano']);
	    	echo "<br>";
	    	echo strval($csv[$i]['Preco']);
	    	echo "<br>";
	    	echo "<br>";
    	}
    }

     echo "<br>MySql<br>";
    $sqlMysql = "SELECT * FROM `livro`;";
    $consultaLivros = mysql_query($sqlMysql,$conexaoMSQL);
    echo "<br>Ano:".$ano."</br>";
    $cont=0;
    while($linha = mysql_fetch_array($consultaLivros)){
        $isbnLivro[$cont] = $linha["isbn"];
        $nomeLivro[$cont] = $linha["titulo"];
        $assuntoLivro[$cont] = $linha["assunto"];
        $numpagLivro[$cont] = $linha["numpag"];
        $anoLivro[$cont] = $linha["ano"];
        $precoLivro[$cont] = $linha["preco"];
        if ($anoLivro[$cont]==$ano){
            echo "<h4>ISBN: ".$isbnLivro[$cont].", Titulo: ".$nomeLivro[$cont].", Autor ?, Assunto: ".$assuntoLivro[$cont].", NumPag: ".$numpagLivro[$cont].", Ano: ".$anoLivro[$cont].", Preco: ".$precoLivro[$cont].".</h4>";
        }
        $cont++;
    }

    echo "<br>PostGreSql:<br>";
    $sqlPsql = "SELECT * FROM livro";
    // Executa a consulta SQL e traz os resultados
    $resultado = pg_exec($conexaoPSQL, $sqlPsql) or die ("Não foi possível executar a consulta");
    echo "<br>Ano:".$ano."</br>";
    $cont=0;
    // Formata os resultados por linha 
    while ($linha = pg_fetch_array($resultado)) {
        $isbnLivro[$cont] = $linha["isbn"];
        $nomeLivro[$cont] = $linha["titulo"];
        $assuntoLivro[$cont] = $linha["assunto"];
        $numpagLivro[$cont] = $linha["numpag"];
        $anoLivro[$cont] = $linha["ano"];
        $precoLivro[$cont] = $linha["preco"];
        if ($anoLivro[$cont]==$ano){
            echo "<h4>ISBN: ".$isbnLivro[$cont].", Titulo: ".$nomeLivro[$cont].", Autor ?, Assunto: ".$assuntoLivro[$cont].", NumPag: ".$numpagLivro[$cont].", Ano: ".$anoLivro[$cont].", Preco: ".$precoLivro[$cont].".</h4>";
        }
    $cont++;
    }

    echo "c) Obter o título, e o preço de todos os livros, passando como parâmetro um valor mínimo para os livros.<br>";
	
	$vmin = 60.00;
    echo "<br>Valor Minimo:".$vmin."<br>";

	for ($l=0; $l <count($xml->livro) ; $l++) { 
    	$result = (float)($xml->livro[$l]->preco);
    	if ($result >= $vmin) {
    		echo strval($xml->livro[$l]->titulo);
	    	echo "<br>";
	    	echo strval($xml->livro[$l]->preco);
	    	echo "<br>";
    	}
    }
    for ($i=0; $i <count($csv) ; $i++) {
    	$result = (float)($csv[$i]['Preco']);
    	if ($result >= $vmin) {
    		echo strval($csv[$i]['Titulo']);
	    	echo "<br>";
	    	echo strval($csv[$i]['Preco']);
	    	echo "<br>";
	    	echo "<br>";
    	}
    }

     echo "<br>MySql<br>";
    $sqlMysql = "SELECT * FROM `livro`;";
    $consultaLivros = mysql_query($sqlMysql,$conexaoMSQL);
    echo "<br>Valor Minimo:".$vmin."<br>";
    $cont=0;
    while($linha = mysql_fetch_array($consultaLivros)){
        $nomeLivro[$cont] = $linha["titulo"];
        $precoLivro[$cont] = $linha["preco"];
        if ($precoLivro[$cont]>=$vmin){
            echo "<h4>Titulo: ".$nomeLivro[$cont].", Preco: ".$precoLivro[$cont].".</h4>";
        }
        $cont++;
    }

    echo "<br>PostGreSql:<br>";
    $sqlPsql = "SELECT * FROM livro";
    // Executa a consulta SQL e traz os resultados
    $resultado = pg_exec($conexaoPSQL, $sqlPsql) or die ("Não foi possível executar a consulta");
    echo "<br>Valor Minimo:".$vmin."<br>";
    $cont=0;
    // Formata os resultados por linha 
    while ($linha = pg_fetch_array($resultado)) {
        $nomeLivro[$cont] = $linha["titulo"];
        $precoLivro[$cont] = $linha["preco"];
        if ($precoLivro[$cont]>=$vmin){
            echo "<h4>Titulo: ".$nomeLivro[$cont].", Preco: ".$precoLivro[$cont].".</h4>";
        }
    $cont++;
    }

    echo "d) Obter o somatório dos preços de todos os livros de todas as bases de dados.<br>";
	
	$soma_xml = 0.0;

	for ($l=0; $l <count($xml->livro) ; $l++) { 
    	$soma_xml += (float)($xml->livro[$l]->preco);
    }
    $soma_csv = 0.0;
    for ($i=0; $i <count($csv) ; $i++) {
    	$soma_csv += (float)($csv[$i]['Preco']);
    }


    $sqlMysql = "SELECT * FROM `livro`;";
    $consultaLivros = mysql_query($sqlMysql,$conexaoMSQL);
 
    $cont=0;
    $somaMsql=0;
    while($linha = mysql_fetch_array($consultaLivros)){
        $somaMsql+=$linha["preco"];
        $cont++;
    }

  
    $sqlPsql = "SELECT * FROM livro";
    // Executa a consulta SQL e traz os resultados
    $resultado = pg_exec($conexaoPSQL, $sqlPsql) or die ("Não foi possível executar a consulta");

    $cont=0;
    $somaPgres=0;
    // Formata os resultados por linha 
    while ($linha = pg_fetch_array($resultado)) {
        $somaPgres+=$linha["preco"];
    $cont++;
    }


    echo "Total: ".($soma_xml+$soma_csv+$somaPgres+$somaMsql);
    echo "<br><br>";

    echo "e) Obter os títulos dos livros de todas as bases de dados, passando como parâmetro o assunto ou o autor
do livro.<br>";
	
	$search = "ver";

	for ($l=0; $l <count($xml->livro) ; $l++) {
    	for ($a=0; $a <count($xml->livro[$l]->autor) ; $a++) {
    		$autor_xml = strval($xml->livro[$l]->autor[$a]);
    		if (stristr($autor_xml, $search)) {
    			echo "Título: ";
    			echo strval($xml->livro[$l]->titulo);
    		}
    	}	
    }

    echo "<br>****<br>";

    for ($i=0; $i <count($csv) ; $i++) {
    	$autor_csv = strval($csv[$i]['Autor']);
    	if (stristr($autor_csv, $search)) {
    		echo "Título: ";
    		echo strval($csv[$i]['Titulo']);
    	}
    }
    echo "<br><br>";

    echo "f) Ler o formato das bases de dados, informando a sua estrutura em um formulário on-line.<br>";
	echo "XML<br>";

?>