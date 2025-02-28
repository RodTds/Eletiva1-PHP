




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <form>
        <div class="row"><!-- 1 linha-->
            <div class="col-md-4">
               <label for="Nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Fulano">
            </div>
            <div class="col-md-4">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" placeholder="de tal">
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" name="email" class="form-control" placeholder="fulanodasilva@gmail.com">
                    <div class="input-group-append"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3"><!--2 linha-->
            <div class="col-md-6">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" name="cidade" class="form-control" placeholder="Presidente Prudente">
            </div>
            <div class="col-md-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" name="estado" class="form-control" placeholder="SP">
            </div>
            <div class="col-md-3">
                <label for="cep" class="form-label">Cep</label>
                <input type="text" name="cep" class="form-control" placeholder="190100-000">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox1">
              <label class="form-check-label" for="checkbox1">
                  Aceito os termos e condições
              </label>
            </div>
        </div>
       
    </form>
    <button type="submit" class="btn btn-primary">Enviar</button>
      
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>




