<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício 9</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1>Exercício 9 e 11 -- Circulo</h1>
  <form method="post" action="respCirculo.php">

    <div class="mb-3 col-2">
      <label for="raio" class="form-label">Digite o Raio</label>
      <input type="text" id="raio" name="raio" class="form-control">
    </div>
    <div class="row">
      <div class="col-2">
        <select name="operador" class="form-select" aria-label="Default select example">
          <option selected>Escolha a Operacao</option>
          <option value="1">Area do Circulo</option>
          <option value="2">Perímetro do Circulo</option>
        </select>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>