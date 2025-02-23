<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio8-10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta Area do Retângulo</h1>
    <h2>
       <?php
          
          if($_SERVER['REQUEST_METHOD'] == 'POST') // PARA NAO DAR ERRO SE ABRIR A PAGINA DIRETO SEM VALORES
          {
          try{
            $op = $_POST['operador'];  
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];
           
            if($op ==1){
              $area = $largura * $altura;
              echo "A área do retângulo é: " . $area . " unidades quadradas."; 
            }
            else if($op == 2){
              $perimetro = 2 * ($altura + $largura);
              echo "O perímetro do retângulo é: $perimetro";
            }
           

           // Exibindo o resultado
             
   
          }catch(Exception $e){
           echo "Erro : $e->getMessage()";
          }
           
          }// IF
       ?>

    </h2>

    <a href="exercicio8-10.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
    <a href="http://localhost:8080"type="button"> <button  class="btn btn-primary">Pagina inicial</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>