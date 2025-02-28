<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Formulario 2</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   <h1>Formulario 2</h1>
   <div class="container">
      <form>
         <div class="row">
            <div class="col-md-1">
               <label class="form-label" for="">Codigo</label>
               <span class="input-group-text">32</span>
            </div>
            <div class="col-md-4">
               <label for="sobrenome" class="form-label">Nome</label>
               <input type="text" name="sobrenome" class="form-control" placeholder="">
            </div>
            <div class="col-md-4">
               <label for="sobrenome" class="form-label">Email</label>
               <input type="text" name="sobrenome" class="form-control" placeholder="fulanosilva@gmail.com">
            </div>
            <div class="col-md-3">
               <label for="cpf" class="form-label">CPF</label>
               <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00">
            </div>

         </div><!--Fim 1 row-->
         <div class="row"> <!--2 row-->
            <div class="col-md-2">
               <label for="celular" class="form-label">Nº Celular</label>
               <input type="text" name="celular" class="form-control" placeholder="(00) 0000-0000">
            </div>
            <div class="col-md-2">
               <label for="fonefixo" class="form-label">Nº Telefone fixo</label>
               <input type="text" name="fonefixo" class="form-control" placeholder="(00) 0000-0000">
            </div>
            <div class="col-md-2">
               <label for="cep" class="form-label">Cep</label>
               <input type="text" name="cep" class="form-control" placeholder="00000-000">
            </div>
            <div class="col-md-2">
               <label for="logradouro" class="form-label">Logradouro</label>
               <input type="text" name="logradouro" class="form-control" placeholder="">
            </div>
            <div class="col-md-1">
               <label for="sobrenome" class="form-label">Nº</label>
               <input type="text" name="sobrenome" class="form-control" placeholder="">
            </div>
            <div class="col-md-3">
               <label for="bairro" class="form-label">Bairro</label>
               <input type="text" name="bairro" class="form-control" placeholder="">
            </div>
         </div><!--Fim 2 row-->
         <div class="row"><!--3 ROW-->
            <div class="col-md-4">
               <label for="cidade" class="form-label">Cidade</label>
               <input type="text" name="cidade" class="form-control" placeholder="">
            </div>
            <div class="col-md-1">
               <label for="uf" class="form-label">UF</label>
               <input type="text" name="uf" class="form-control" placeholder="">
            </div>
            <div class="col-md-4">
               <label for="status" class="form-label">Status</label>
               <select class="form-select" name="status" id="">
                  <option value="1">Atualizado</option>
                  <option value="2">Desatualizado</option>
               </select>
            </div>

         </div> <!--Fim 3 row-->
         <div class=" row justify-content-end ">
            <div class="col-2 col-md-auto">
               <button type="button" class="btn btn-success">Resetar</button>
               <button type="button" class="btn btn-danger "">Próximo</button>
            </div>
       
</form>
    </div><!--Fim div container-->



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>