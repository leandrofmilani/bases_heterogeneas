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
?>