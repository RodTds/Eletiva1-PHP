<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eletiva 1 Fatec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body >
   
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark  " >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Exerc1-4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
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
          <a class="nav-link active" aria-current="page" href="Lista2/exerc9/exercicio9.php">Exerc 9</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Lista2/exerc10/exercicio10.php">Exerc 10</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Lista2/exerc11/exercicio11.php">Exerc 11</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Lista2/exerc12/exercicio12.php">Exerc 12</a>
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
            <li><hr class="dropdown-divider"></li>
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

 
    <div class="mb-3 "><!--Operaçoes basicas Exerc 1 ao 4-->
    <form method="post" action="resposta.php">
                        
            <div class="col-2">
              <label for="numero1" class="form-label">Informe o Numero 1</label>
              <input type="text" id="numero1" name="numero1" class="form-control">
            </div>
            <div class="col-2">
                 <label for="numero2" class="form-label">Informe O numero 2</label>
                 <input type="text" id="numero2" name="numero2" class="form-control">
             </div>
             <!--FIM DOS iNPUTS DOS NUMEROS   -->
             <!--iNICIO DAS SELECAO DAS OPERAÇOES-->
             <div class="row" >
                  <div class="col-2">
                    <select name="op"class="form-select" aria-label="Default select example">
                      <option selected>Escolha a Operacao</option>
                      <option value="1" >Somar</option>
                      <option value="2" >Subtrair</option>
                      <option value="3" >Dividir</option>
                      <option value="4" >Multiplicar</option>
                    </select>
                   </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
</div><!--FIM oerações basicas-->  

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>