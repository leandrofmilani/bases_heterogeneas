<?php

	//Carrega as bases de dados .xml e .csv
	require_once("carrega_bases.php");
	

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

    echo "b) Obter todos os dados dos livros editados em um ano específico.<br>";

    $ano = 2005;

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

    echo "c) Obter o título, e o preço de todos os livros, passando como parâmetro um valor mínimo para os livros.<br>";
	
	$vmin = 60.00;

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

    echo "d) Obter o somatório dos preços de todos os livros de todas as bases de dados.<br>";
	
	$soma_xml = 0.0;

	for ($l=0; $l <count($xml->livro) ; $l++) { 
    	$soma_xml += (float)($xml->livro[$l]->preco);
    }
    $soma_csv = 0.0;
    for ($i=0; $i <count($csv) ; $i++) {
    	$soma_csv += (float)($csv[$i]['Preco']);
    }
    echo "Total: ".($soma_xml+$soma_csv);
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