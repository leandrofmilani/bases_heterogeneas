<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Bases Heterogêneas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Leandro Fabris Milani e Josemar Fuzinatto">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<center>
<div class="container">
	<div class="row clearfix">
	<!-- Form Name -->
	<legend><h2><center>Consulta à bases de dados heterogêneas.</center></h2></legend>
		<div class="col-md-6 column">
			
			
			<!-- Form A -->
			<form class="form-horizontal" action="index.php?q=a" method="POST">
				<fieldset>

					<!-- Form Name -->
					<h3>a) Obter o título, autor e ano de publicação de todos os livros.</h3>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="qa"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="qa" value="Ver">
					  </div>
					</div>

				</fieldset>
			</form>

			<hr>

			<!-- Form B -->
			<form class="form-horizontal" action="index.php?q=b" method="POST">
				<fieldset>

					<!-- Form Name -->
					<h3>b) Obter todos os dados dos livros editados em um ano específico.</h3>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="qb">Informe o ano:</label>
					  <div class="controls">
					    <input id="qb" name="qb" type="text" placeholder="Ex.: 2005" class="input-mini" required="">
					    
					  </div>
					</div>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="qb"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="qb" value="Ver">
					  </div>
					</div>

				</fieldset>
			</form>

			<hr>

			<!-- Form C -->
			<form class="form-horizontal" action="index.php?q=c" method="POST">
				<fieldset>

					<!-- Form Name -->
					<h3>c) Obter o título, e o preço de todos os livros, passando como parâmetro um valor mínimo para os livros.</h3>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="qc">Informe o valor mínimo:</label>
					  <div class="controls">
					    <input id="qc" name="qc" type="text" placeholder="Ex.: 60.50" class="input-mini" required="">
					    
					  </div>
					</div>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="qc"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="qc" value="Ver">
					  </div>
					</div>

				</fieldset>
			</form>

		</div>
		<div class="col-md-6 column">

			<!-- <hr> -->

			<!-- Form D -->
			<form class="form-horizontal" action="index.php?q=d" method="POST">
				<fieldset>

					<!-- Form Name -->
					<h3>d) Obter o somatório dos preços de todos os livros de todas as bases de dados.</h3>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="qd"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="qd" value="Ver">
					  </div>
					</div>

				</fieldset>
			</form>

			<hr>

			<!-- Form E -->
			<form class="form-horizontal" action="index.php?q=e" method="POST">
				<fieldset>

					<!-- Form Name -->
					<h3>e) Obter os títulos dos livros de todas as bases de dados, passando como parâmetro o assunto ou o autor
					do livro.</h3>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="qe">Informe o assunto o nome do autor:</label>
					  <div class="controls">
					    <input id="qe" name="qe" type="text" placeholder="Ex.: Nome" class="input-mini" required="">
					    
					  </div>
					</div>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="qe"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="qe" value="Ver">
					  </div>
					</div>

				</fieldset>
			</form>

			<hr>

			<!-- Form F -->
			<form class="form-horizontal" action="index.php?q=f" method="POST">
				<fieldset>

					<!-- Form Name -->
					<h3>f) Ler o formato das bases de dados, informando a sua estrutura em um formulário on-line.</h3>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="qf"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="qf" value="Ver">
					  </div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>
</div>
</center>
</body>
</html>


<?php

	echo "<hr>";
	echo "<center style='color:red'>";
	include("aplicacao.php");
	echo "</center>";

?>
