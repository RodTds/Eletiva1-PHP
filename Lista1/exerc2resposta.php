
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta Exercicio 2!</h1>

    
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') // PARA NAO DAR ERRO SE ABRIR A PAGINA DIRETO SEM VALORES
        {
            try{
            $numero1 =  $_POST['numero1']; // comando que recebe o valor do formulario,identificado pelo NAME
            $numero2 =  $_POST['numero2']; // neste caspo estameos recebendo pelo metodo POST
            $sub  = $numero1 - $numero2;
            echo"O valor da Soma é: $sub";
            // $div = $numero1 / $numero2; // divisao
            // $mult = $numero1 * $numero2;
            // resto da divisao  %
            }catch(Exception $e){
                echo "Erro : $e->getMessage()";
            }
        }
        

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>




