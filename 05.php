<?php

/*
	5. Um algoritmo deve buscar um sub-texto dentro de um texto fornecido. (Não usar funções de
	busca em string). 

	Knuth–Morris–Pratt Algorithm
*/

function SearchString($str, $pat)
{
	$retVal = array();
	$M = strlen($pat);
	$N = strlen($str);
	$i = 0;
	$j = 0;
	$lps = array();

	ComputeLPSArray($pat, $M, $lps);

	while ($i < $N)
	{
		if ($pat[$j] == $str[$i])
		{
			$j++;
			$i++;
		}

		if ($j == $M)
		{
			array_push($retVal, $i - $j);
			$j = $lps[$j - 1];
		}

		else if ($i < $N && $pat[$j] != $str[$i])
		{
			if ($j != 0)
				$j = $lps[$j - 1];
			else
				$i = $i + 1;
		}
	}

	return $retVal;
}

function ComputeLPSArray($pat, $m, &$lps)
{
	$len = 0;
	$i = 1;

	$lps[0] = 0;

	while ($i < $m)
	{
		if ($pat[$i] == $pat[$len])
		{
			$len++;
			$lps[$i] = $len;
			$i++;
		}
		else
		{
			if ($len != 0)
			{
				$len = $lps[$len - 1];
			}
			else
			{
				$lps[$i] = 0;
				$i++;
			}
		}
	}
}

$texto = $_POST["texto"];
$subtexto = $_POST["subtexto"];

$value = SearchString($texto, $subtexto);



	
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
					<h3>Solução Exercício 5</h3>
					<h4>Posição da substring: <?php print_r($value); ?> </h4>
					
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

	