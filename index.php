<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eletiva 1 Fatec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Ben Vindos a Lista 1 de Exercicios -- Boa Noite hoje é: 
        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            echo date("d/m/y");
        ?>
    </h1>
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
    <p> 
        <?php
        /* aspas duplas colocar a varialvel dentro apresenta o conteudo da variavel
        // concatenar é o ponto
             $nome = "Rodrigo";
             echo "o nome é $nome";
          */
        ?>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>