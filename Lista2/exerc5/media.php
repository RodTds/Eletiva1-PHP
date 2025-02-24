



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta Media</h1>
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST') // PARA NAO DAR ERRO SE ABRIR A PAGINA DIRETO SEM VALORES
      {
      try{
         $n1 = $_POST['n1'];
         $n2 = $_POST['n2'];
         $n3 = $_POST['n3'];
         $media = ($n1+$n2+$n3)/ 3;
         if($media >=6){
            echo "Parabens sua média é: $media vocÊ foi aprovado";
         }else{
            echo "Que Pena sua média é: $media Você não foi aprovado";
         }


      }catch(Exception $e){
        echo "Erro : $e->getMessage()";
    }
    }// IF
    ?>
    
    <a href="exercicio5.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
    <a href="http://localhost:8080"type="button"> <button  class="btn btn-primary">Pagina inicial</button></a>
            



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>