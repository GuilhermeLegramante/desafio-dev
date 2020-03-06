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
        <h3>Exercício 1</h3>
        <p>Escrever um algoritmo que rotacione um array em k posições. Exemplo: o array
          [1,2,3,4,5,6] se for girado duas posições para a esquerda se torna [3,4,5,6,1,2]. Tente
          resolver sem usar uma cópia da array. </p>
        <form action="01.php" method="post">
          <div class="form-group">
            <label for="array">Informe o array:</label>
            <input type="text" placeholder="1,2,3,4,5,6" class="form-control" id="array" name="array">

            <label for="num">Informe o número de rotações:</label>
            <input type="number" class="form-control" id="num" name="num">
            <div class="checkbox">
              
            </div>

            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
          
        </div>
      </div>
    </div>

  </body>
  </html>