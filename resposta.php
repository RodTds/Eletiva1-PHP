<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') // PARA NAO DAR ERRO SE ABRIR A PAGINA DIRETO SEM VALORES
        {
            try{
            $numero1 =  $_POST['numero1']; // comando que recebe o valor do formulario,identificado pelo NAME
            $numero2 =  $_POST['numero2']; // neste caspo estameos recebendo pelo metodo POST
            $op = $_POST['op']; // recebe o valor do select
              
            switch ($op) {
              case 1:
                $soma  = $numero1 + $numero2;
                echo"O valor da Soma é: $soma";
                  break;
              case 2:
                $sub = $numero1 - $numero2;
                echo "O valor da Subtração é: $sub";
                  break;
              case 3:
                    if( $numero2 == 0){
                       echo "Não é possivel divisão por ZERO --- insira outro número";
                    }
                    else{
                     $div = $numero1 / $numero2;   // ou resto da divisao  %
                     echo "O valor da divisão é: $div";
                    
                    }
                    break;
              case 4:
                 $mult = $numero1 * $numero2;
                    echo "O valor da mutiplicação é: $mult";
                    break;
              } // switch
            
            }catch(Exception $e){
                echo "Erro : $e->getMessage()";
            }
        }// IF
        

    ?>
    <div class="mb-3">
      <a href="index.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
      </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>