<?php

/*
	2. Criar um algoritmo que leia um vetor de números e reordene este vetor contendo no início os
	números pares de forma crescente e depois, os ímpares de forma decrescente.

	[1,2,3,4,5,6] => [2,4,6,5,3,1]
*/

	$arr = $_POST["array2"];
	$array = explode(',', $arr);

	//$array = [1,2,3,4,5,6];

	$pares = retornaPares($array);
	$impares = retornaImpares($array);

	$ordC = ordenaCrescente($pares);
	$ordD = ordenaDecrescente($impares);

	$uniao = array_merge($ordC, $ordD);

	function retornaPares($array){
		for($i=0; $i<count($array); $i++){
			if($array[$i] % 2 == 0){
				$pares[$i] = $array[$i];
			}
		}

		return array_merge($pares);
	}

	function retornaImpares($array){
		for($i=0; $i<count($array); $i++){
			if($array[$i] % 2 != 0){
				$impares[$i] = $array[$i];
			}
		}

		return array_merge($impares);
	}


	function ordenaCrescente($array){
		for($i=0; $i<count($array)-1; $i++) {
			$min = $i;
			for($j=$i+1; $j<count($array); $j++) {
				if ($array[$j]<$array[$min]) {
					$min = $j;
				}
			}
			$array = trocaPosicao($array, $i, $min);
		}
		return array_merge($array);
	}

	function ordenaDecrescente($array){
		for($i=0; $i<count($array)-1; $i++) {
			$min = $i;
			for($j=$i+1; $j<count($array); $j++) {
				if ($array[$j]>$array[$min]) {
					$min = $j;
				}
			}
			$array = trocaPosicao($array, $i, $min);
		}
		return array_merge($array);
	}

	function trocaPosicao($arr, $esq, $dir) {
		$aux = $arr[$dir];
		$arr[$dir] = $arr[$esq];
		$arr[$esq] = $aux;
		return array_merge($arr);
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
					<h3>Solução Exercício 2</h3>
					<p><?php print_r($uniao); ?></p>
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
