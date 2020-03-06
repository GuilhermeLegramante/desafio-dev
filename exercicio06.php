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
        <h3>Exercício 6</h3>
        <p>Criar um algoritmo que teste se dois retângulos se sobrepõem em um plano cartesiano e
          calcule a área do retângulo criado pela sobreposição. Deve receber como entrada dois
          retângulos formados por pontos, ex: (0,0),(2,2),(2,0),(0,2),(1,0),(1,2),(6,0),(6,2) e gerar uma
          saída informando a área calculada ou zero se não ocorrer sobreposição.</p>
        <form action="06.php" method="post">
          <div class="form-group">
            <label for="v1ret1">Vértice 01 do retângulo 01:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v1ret1" name="v1ret1">

            <label for="v2ret1">Vértice 02 do retângulo 01:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v2ret1" name="v2ret1">

            <label for="v3ret1">Vértice 03 do retângulo 01:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v3ret1" name="v3ret1">

            <label for="v4ret1">Vértice 04 do retângulo 01:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v4ret1" name="v4ret1">


            <label for="v1ret2">Vértice 01 do retângulo 02:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v1ret2" name="v1ret2">

            <label for="v2ret2">Vértice 02 do retângulo 02:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v2ret2" name="v2ret2">

            <label for="v3ret2">Vértice 03 do retângulo 02:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v3ret2" name="v3ret2">

            <label for="v4ret2">Vértice 04 do retângulo 02:</label>
            <input type="text" placeholder="1,2" class="form-control" id="v4ret2" name="v4ret2">



            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
      </div>
    </div>
  </div>


  </body>
  </html>