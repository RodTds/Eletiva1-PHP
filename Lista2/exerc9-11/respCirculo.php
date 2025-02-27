<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 9 e 11--  Circulo</h1>
    <h2>
       <?php
        
          if($_SERVER['REQUEST_METHOD'] == 'POST') // PARA NAO DAR ERRO SE ABRIR A PAGINA DIRETO SEM VALORES
          {
          try{
            $op = $_POST['operador']; 
            $raio = $_POST['raio'];
            $pi = 3.14159;
            if($op == 1){
              $area = $pi * pow($raio, 2);
             // Exibindo o resultado
              echo "A área do circulo é: $area"; 
            }
            else if($op==2){
              $perimetro = 2 * $pi * $raio;
             // Exibindo o resultado
               echo "O perímetro do circulo é: $perimetro"; 
            }
              
   
          }catch(Exception $e){
           echo "Erro : $e->getMessage()";
          }
           
          }// IF
       ?>

    </h2>

    <a href="exercicio9-11.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
    <a href="http://localhost:8080"type="button"> <button  class="btn btn-primary">Pagina inicial</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<!-- SE fosse criando  Função 

?<php  
function calcularAreaCirculo($raio) {
    $pi = 3.14159;
    $area = $pi * pow($raio, 2);
    return $area;
}

// Exemplo de uso
$raio = 5;
$area = calcularAreaCirculo($raio);
echo "A área do círculo com raio $raio é $area";
?>
 -->