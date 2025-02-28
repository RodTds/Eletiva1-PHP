<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
  <h1 class="text-center mb-4">Sample Form</h1>
    <form>
      <div class="row mb-3"><!--Linha 1-->
        <div class="col-md-6 d-flex align-items-center">
          <label for="input1" class="form-label me-2">Partner name:</label>
          <input type="text" class="form-control" id="input1" placeholder="Digite algo">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <label for="input2" class="form-label me-2">Parner email ID:</label>
          <input type="text" class="form-control" id="input2" placeholder="Digite algo">
        </div>
      </div><!--Fim linha 1-->
      <div class="row mb-3"><!--Lnha 2-->
        <div class="col-md-6 d-flex align-items-center">
          <label for="input3" class="form-label me-2">Partner Legal name:</label>
          <input type="text" class="form-control" id="input3" placeholder="Digite algo">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <label for="input4" class="form-label me-2">Partner mobile:</label>
          <input type="text" class="form-control" id="input4" placeholder="Digite algo">
        </div>
      </div><!--Fim linha 2-->
      <div class="row mb-3"><!---Linha 3-->
        <div class="col-md-12 d-flex align-items-center">
          <label for="textarea" class="form-label me-5">Partner Area:</label>
          <textarea class="form-control " id="textarea" rows="3" placeholder="Digite um texto adicional"></textarea>
        </div>
      </div><!--Fim linha 3-->

      <div class="row mb-3"><!--Linha 4-->
        <div class="col-md-6 d-flex align-items-center">
          <label for="input5" class="form-label me-2">Contract star date:</label>
          <input type="text" class="form-control" id="input5" placeholder="Digite algo">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <label for="input6" class="form-label me-2">Contract expiry date:</label>
          <input type="text" class="form-control" id="input6" placeholder="Digite algo">
        </div>
      </div><!--Fim linha 4-->
      <div class="row mb-3"><!--Linha 5-->
        <div class="col-md-6 d-flex align-items-center">
          <label for="input7" class="form-label me-2">Minimum loan amount:</label>
          <input type="text" class="form-control" id="input7" placeholder="Digite algo">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <label for="input8" class="form-label me-2">Maximum loan amount:</label>
          <input type="text" class="form-control" id="input8" placeholder="Digite algo">
        </div>
      </div><!--Fim Linha 5-->
      <div class="row mb-3"><!--Linha 6 -->
        <div class="col-md-6 d-flex align-items-center">
          <label for="input9" class="form-label me-2">Interest Rate:</label>
          <input type="text" class="form-control" id="input9" placeholder="Digite algo">
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <label for="input10" class="form-label me-2">Deposit amount:</label>
          <input type="text" class="form-control" id="input10" placeholder="Digite algo">
        </div>
      </div> <!--Fim linha 6--->

      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-3">Save</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
