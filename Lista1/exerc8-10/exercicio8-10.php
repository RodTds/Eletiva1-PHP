<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio8-10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 8 -- Area do Retângulo</h1>
    
    <form method="post"  action="respRetangulo.php">
                        
                        <div class="mb-3 col-2">
                            <label for="largura" class="form-label">Digite a largura</label>
                            <input type="text" id="largura" name="largura" class="form-control">
                        </div>
                    
                        <div class="mb-3 col-2">
                            <label for="altura" class="form-label">Digite a Altura</label>
                            <input type="text" id="altura" name="altura" class="form-control">
                        </div>
                        <!-- Selecionar tipo de calculo-->
                        div class="row" >
                  <div class="col-2">
                    <select name="operador"class="form-select" aria-label="Default select example">
                      <option selected>Escolha a Operacao</option>
                      <option value="1" >Area</option>
                      <option value="2" >perimetro</option>
                    </select>
                   </div>
                </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>