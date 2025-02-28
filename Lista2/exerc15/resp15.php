<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta exercicio 15 -- IMC</h1>
    <h2>
        <?php
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try {
               $peso = $_POST['peso'];
               $altura = $_POST['altura'];
               $imc = $peso/$altura ** 2;
               echo"O valor do IMC é: $imc";              
    
            } catch (Exception $e) {
    
                echo "Erro : $e->getMessage()";
            }
        }
           
        ?>
    </h2>
    <a href="exercicio15.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
    <a href="http://localhost:8080"type="button"> <button  class="btn btn-primary">Pagina inicial</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>