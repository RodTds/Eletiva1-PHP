
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta da Temperarura</h1>
    <?php
       
       if($_SERVER['REQUEST_METHOD'] == 'POST') // PARA NAO DAR ERRO SE ABRIR A PAGINA DIRETO SEM VALORES
       {
       try{
           
           $temp = $_POST['temperatura'];
           $op = $_POST['operador'];
           if($op == 1)
           {
            $fahrenheit= $temp *9/5+32;  // celsius para $fahrenheit  
            echo "A temperatura em Fahrenheit é: $fahrenheit";
           }
           else if($op == 2){
            $celsius=5/9*($temp-32);
            echo "A temperatura em Celsius é: $celsius";
           }
          

       }catch(Exception $e){
        echo "Erro : $e->getMessage()";
       }
        
       }// IF
    ?>
     <a href="exercicio6.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
     <a href="http://localhost:8080"type="button"> <button  class="btn btn-primary">Pagina inicial</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>