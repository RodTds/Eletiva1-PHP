<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 6-7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 6-7 -- Conversao de Temperatura</h1>
    
    <form method="post" action="respTemperatura.php">
                        
        <div class="mb-3 col-2">
             <label for="temperatura" class="form-label">Digite a temperatura</label>
             <input type="text" id="temperatura" name="temperatura" class="form-control">
        </div> <!--Fim TextBox-->
        <div class="row" >
                  <div class="col-2">
                    <select name="operador"class="form-select" aria-label="Default select example">
                      <option selected>Escolha a Operacao</option>
                      <option value="1" >Celsius para Fahrenheit</option>
                      <option value="2" >Fahrenheit para Celsius</option>
                    </select>
                   </div>
                </div>
                    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
   
                
                   
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>