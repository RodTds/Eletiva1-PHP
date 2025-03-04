<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eletiva 1 Fatec</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark  ">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc1-4/exercicio1-4.php">Exerc1-4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc5/exercicio5.php">Exerc 5</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc6-7/exercicio6-7.php">Exerc 6-7</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc8-10/exercicio8-10.php">Exerc 8-10</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc9-11/exercicio9-11.php">Exerc 9-11</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc12/exercicio12.php">Exerc 12</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc13/exercicio13.php">Exerc 13</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc14/exercicio14.php">Exerc 14</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc15/exercicio15.php">Exerc 15</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc16/exercicio16.php">Exerc 16</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc17-18/exercicio17-18.php">Exerc 17-18</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc19/exercicio19.php">Exerc 19</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Lista2/exerc20/exercicio20.php">Exerc 20</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Lista1/exercicio1.php">Exercicio1</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Link</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <h1 class="text-right">
    Fatec <?php
          function obterDataHora()
          {
            // Define o fuso horário para garantir que a data e hora estejam corretas
            date_default_timezone_set('America/Sao_Paulo');

            // Obtém a data e hora atual no formato desejado
            $dataHora = date('d-m-Y H:i:s');

            return $dataHora;
          }

          // Exemplo de uso da função
          echo obterDataHora();
          ?>

  </h1>
  <h2>Lista 2 -- Eletiva 1 de Programação</h2>
  <h3>Escolha o exercício no menu acima</h3>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<!--  
      
        

    
      COPIA E COLA TRY CATCH

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
         
          

        } catch (Exception $e) {

            echo "Erro : $e->getMessage()";
        }
    }
        
 COPIA E COLA BOTAO VOLTAR E INICIAL 
 <a href="exercicio12.php"type="button"> <button  class="btn btn-primary">Voltar</button></a>
 <a href="http://localhost:8080"type="button"> <button  class="btn btn-primary">Pagina inicial</button></a>
      -->