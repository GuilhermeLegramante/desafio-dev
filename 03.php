<?php

/*
	3. Escreva um algoritmo que calcule o tempo em dias a partir de uma data inicial e final
	recebidos no formato dd/mm/aaaa. Não deve usar funções de data e hora.
*/

	$data1str = $_POST["data1str"];
	$data1 = explode('/', $data1str);

	$data2str = $_POST["data2str"];
	$data2 = explode('/', $data2str);

	$dia1 = $data1[0];
	$mes1 = $data1[1];
	$ano1 = $data1[2];

	$dia2 = $data2[0];
	$mes2 = $data2[1];
	$ano2 = $data2[2];


	$teste = ceil(diferenca_data($dia1, $mes1, $ano1, $dia2, $mes2, $ano2));

	

	function dia_no_ano($dia, $mes, $ano){
		$numero_de_dias = $dia;
		$contador_meses = 1;
		while ($contador_meses < $mes) {
			if (($contador_meses == 1)||($contador_meses ==  3) ||($contador_meses ==  5)||($contador_meses ==  7)||($contador_meses ==  8)||($contador_meses ==  10)||($contador_meses ==  12)) {
				$numero_de_dias += 31;
			} elseif (($contador_meses == 4)||($contador_meses ==  6) ||($contador_meses ==  9)||($contador_meses ==  11)) {
				$numero_de_dias += 30;
			} elseif ($contador_meses == 2) {
				$numero_de_dias += 28;
			}
			$contador_meses += 1;
		}
		return $numero_de_dias;
	}

	function ehBissexto($ano){
		if (($ano % 4 == 0) && (($ano % 100 != 0) || ($ano % 400 == 0))){
			return true;
		} else {
			return false;
		}

	}

	function validar_data($dia, $mes, $ano){
		if(($dia < 1) || ($dia > 31) || ($mes < 1) || ($mes > 12) || ($ano < 1583)){
			return false;
		}
		if((($mes == 4) || ($mes == 6) || ($mes == 9) || ($mes == 11)) && ($dia == 31)){
			return false;
		}
		if (($mes == 2) && ($dia >= 30)){
			return false;
		}
		if (($mes == 2) && ($dia == 29) && (ehBissexto($ano) == false)){
			return false;
		}

		return true;

	}


	function diferenca_data($dia1, $mes1, $ano1, $dia2, $mes2, $ano2){
		if(validar_data($dia1, $mes1, $ano1) && (validar_data($dia2, $mes2, $ano2))){
			$dias_ano1 = dia_no_ano($dia1, $mes1, $ano1);
			$dias_ano2 = dia_no_ano($dia2, $mes2, $ano2);

			$dias_total = $dias_ano2 - $dias_ano1 + ($ano2 - $ano1) * 365;

			$ano1b = $ano1;
			if ($mes1 < 3){
				$ano1b -= 1;
			}

			$ano2b = $ano2;
			if ($mes2 < 3){
				$ano2b -= 1;
			}

			$dias_total += ($ano2b / 4) - ($ano1b / 4);

			$dias_total -= ($ano2b / 100) - ($ano1b / 100);

			$dias_total += ($ano2b / 400) - ($ano1b / 400);

			return $dias_total;

		} else {
			echo "Data inválida!";
		}
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
					<h3>Solução Exercício 3</h3>
					<p><?php print_r($teste); ?></p>
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
