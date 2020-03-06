<?php

/*
	6. Criar um algoritmo que teste se dois retângulos se sobrepõem em um plano cartesiano e
	calcule a área do retângulo criado pela sobreposição. Deve receber como entrada dois
	retângulos formados por pontos, ex: (0,0),(2,2),(2,0),(0,2),(1,0),(1,2),(6,0),(6,2) e gerar uma
	saída informando a área calculada ou zero se não ocorrer sobreposição.

	ret1_x[0] == ret1_
*/

	$v1ret1str = $_POST["v1ret1"];
	$v1ret1 = explode(',', $v1ret1str);

	$v2ret1str = $_POST["v2ret1"];
	$v2ret1 = explode(',', $v2ret1str);

	$v3ret1str = $_POST["v3ret1"];
	$v3ret1 = explode(',', $v3ret1str);

	$v4ret1str = $_POST["v4ret1"];
	$v4ret1 = explode(',', $v4ret1str);

	$v1ret2str = $_POST["v1ret2"];
	$v1ret2 = explode(',', $v1ret2str);

	$v2ret2str = $_POST["v2ret2"];
	$v2ret2 = explode(',', $v2ret2str);

	$v3ret2str = $_POST["v3ret2"];
	$v3ret2 = explode(',', $v3ret2str);

	$v4ret2str = $_POST["v4ret2"];
	$v4ret2 = explode(',', $v4ret2str);


	$ret1 = array($v1ret1, $v2ret1, $v3ret1, $v4ret1);
	$ret2 = array($v1ret2, $v2ret2, $v3ret2, $v4ret2);

	$base_ret1 = $ret1[1][0] - $ret1[0][0];
	$altura_ret1 = $ret1[1][0] - $ret1[1][1];

	$base_ret2 = $ret2[1][0] - $ret2[0][0];
	$altura_ret2 = $ret2[1][0] - $ret2[1][1];

	$base_sobreposicao = $ret2[1][0] - $ret1[0][0];
	$altura_sobreposicao = $ret2[1][0] - $ret1[1][1];

	$area_sobreposicao = $base_sobreposicao * $altura_sobreposicao;


	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Teste Bling</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="jumbotron text-center">
			<h1>Teste Desenvolvedor Bling</h1>
			<p>Lista de exercícios</p> 
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-10">
					<h3>Solução Exercício 6</h3>

					<h4>Área sobreposição: <?php print_r($area_sobreposicao); ?> </h4>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10"></div>
			</div>
			<div class="row">
				<div class="col-sm-10">
					<a href="index.php" class="btn btn-info" role="button">Voltar ao início</a>
				</div>
			</div>
		</div>


	</body>
	</html>