<?php

/*
	4. Receba 6 números representando medidas a,b,c,d,e e f e relacionar quantos e quais
	triângulos é possível formar usando estas medidas. Exemplo [abc], [abd] .... 

*/
	$medidas = $_POST["medidas"];
	$array = explode(',', $medidas);

	//$array = [1,2,3,4,5,6];

	$teste = combinacoesPossiveis($array);
	$total = totalCombinacoes($array, 3);

	


	function fatorial($numero){
		if($numero <= 1){
			return $numero;
		}else{
			return $numero * fatorial($numero - 1);
		}
	}

	function totalCombinacoes($array, $p){
		$n = count($array);
		$nComb = fatorial($n)/((fatorial($p)*(fatorial($n-$p))));

		return $nComb;
	}

	function combinacoesPossiveis($array){
		
		$arr[0] = $array[0].$array[1].$array[2];
		$arr[1] = $array[0].$array[1].$array[3];
		$arr[2] = $array[0].$array[1].$array[4];
		$arr[3] = $array[0].$array[1].$array[5];

		$arr[4] = $array[0].$array[2].$array[3];
		$arr[5] = $array[0].$array[2].$array[4];
		$arr[6] = $array[0].$array[2].$array[5];

		$arr[7] = $array[0].$array[3].$array[4];
		$arr[8] = $array[0].$array[3].$array[5];

		$arr[9] = $array[0].$array[4].$array[5];

		$arr[10] = $array[1].$array[2].$array[3];
		$arr[11] = $array[1].$array[2].$array[4];
		$arr[12] = $array[1].$array[2].$array[5];

		$arr[13] = $array[1].$array[3].$array[4];
		$arr[14] = $array[1].$array[3].$array[5];

		$arr[15] = $array[1].$array[4].$array[5];

		$arr[16] = $array[2].$array[3].$array[4];
		$arr[17] = $array[2].$array[3].$array[5];

		$arr[18] = $array[2].$array[4].$array[5];

		$arr[19] = $array[3].$array[4].$array[5];

		return $arr;

	}


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
					<h3>Solução Exercício 4</h3>
					<h4>Total de triângulos: <?php print_r($total); ?> </h4>
					<h4>Triângulos possíveis: <?php print_r($teste); ?> </h4>
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

