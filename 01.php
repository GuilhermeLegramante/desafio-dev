<?php


/*
	1. Escrever um algoritmo que rotacione um array em k posições. Exemplo: o array
	[1,2,3,4,5,6] se for girado duas posições para a esquerda se torna [3,4,5,6,1,2]. Tente
	resolver sem usar uma cópia da array. 
*/
	$arr = $_POST["array"];
	$num = $_POST["num"];

	$array = explode(',', $arr);
	
	$test = shiftArray($num, $array);

/*
	Função para rotação do array, recebe os parâmetros num e array que são o número de vezes e o array a ser
	rotacionado.
*/
	function shiftArray($num, $array){
		for($j=1; $j<=$num; $j++){
			$aux = $array[0];		
			for($i=0; $i<count($array)-1; $i++){		
				$array[$i] = $array[$i+1];
			}
			$array[count($array)-1] = $aux;	
		}
		
		return $array;
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
					<h3>Solução Exercício 1</h3>
					<p><?php print_r($test); ?></p>
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


