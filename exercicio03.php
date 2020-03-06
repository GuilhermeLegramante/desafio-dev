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
        <h3>Exercício 3</h3>
        <p>Escreva um algoritmo que calcule o tempo em dias a partir de uma data inicial e final
          recebidos no formato dd/mm/aaaa. Não deve usar funções de data e hora.</p>
        <form action="03.php" method="post">
          <div class="form-group">
            <label for="data1str">Informe a data inicial:</label>
            <input type="text" placeholder="dd/mm/aaaa" class="form-control" id="data1str" name="data1str">

            <label for="data2str">Informe a data final:</label>
            <input type="text" placeholder="dd/mm/aaaa" class="form-control" id="data2str" name="data2str">

            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
      </div>
    </div>
  </div>


  </body>
  </html>