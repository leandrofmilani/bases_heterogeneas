<?php
/*
$sqlSelecionar = "SELECT * FROM `tbl_usuario` WHERE `id`='$idLogado';";
	$consulta = mysql_query($sqlSelecionar,$conexaoMSQL);
	$idPerfil = mysql_fetch_array($consulta);


	echo "$idPerfil[nome]";
	echo " $idPerfil[sobrenome]";

	OOOUUUU

	$sqlAmizades = "select * from tbl_amizade where id2=$idLogado and 
						status = 0";
						if($res = mysql_query($sqlAmizades, $conexao)){
						//echo "<br>entrou<br>";
						while($linha = mysql_fetch_array($res)){
						echo "<br>Amizades Pendentes: <br/><br/>";
						//mostra todas as amizades pendentes	 
						echo "printando somente o id das respostas, id=$linha[id1]";
						}


 $SQL = "SELECT * FROM tabela_do_banco_de_dados";
 $resultado_geral = pg_exec($conexaoPSQL, $SQL);
 $id1 = pg_result($resultado_geral, 0, '"id"');
  /* a variável $id1 receberá o id da notícia da primeira linha da consulta * / echo "$id1";
 /* esta linha de código faz com que seja impresso no documento HTML o conteúdo da variável $id1 */

require_once("conectaMySQL.php");
require_once("conectaPostGreSQL.php");


$sqlSelecionar = "SELECT * FROM `livro`;";
	$consulta = mysql_query($sqlSelecionar,$conexaoMSQL);
	//$livros = mysql_fetch_array($consulta);
	$cont=0;
	while($linha = mysql_fetch_array($consulta)){
		$nomeLivro[$cont] = $linha["titulo"];
		echo "<h4>".$nomeLivro[$cont]."</h4>";
		$cont++;
	}




/* Cria a conexão
Substitua pelo seu próprio nome de usuário e senha */
$conexao = pg_connect("host=localhost dbname=banco_g2 user=root password=postgres") or die ("Não foi possível conectar ao Banco de dados.");

// Cria a declaração SQL
$sql = "SELECT * FROM livro";

// Executa a consulta SQL e traz os resultados
$resultado = pg_exec($conexao, $sql) or die ("Não foi possível executar a consulta");

$cont2=0;
// Formata os resultados por linha 
while ($linha = pg_fetch_array($resultado)) {
$tituloLivro = $linha["titulo"];
echo "<h4>".$tituloLivro[$cont2]."</h4>";
$cont2++;
}

// Libera recursos e fecha conexão pg_freeresult($resultado);
pg_close($conexao);














 ?>