<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 17 e 18 -- Juros simples e comostos</h1>
    <form method="post" action="resp17-18.php">
                        
                        <div class="mb-3">
                            <label for="capital" class="form-label">Capital</label>
                            <input type="text" id="capital" name="capital" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="juros" class="form-label">Juros</label>
                            <input type="text" id="juros" name="juros" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="periodo" class="form-label">Periodo</label>
                            <input type="text" id="periodo" name="periodo" class="form-control">
                        </div>
                        <div class="row" >
                  <div class="col-2">
                    <select name="operador"class="form-select" aria-label="Default select example">
                      <option selected>Escolha a Operacao</option>
                      <option value="1" >Juros Simples</option>
                      <option value="2" >Juros Compostos</option>
                    </select>
                   </div>
                </div>

                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>