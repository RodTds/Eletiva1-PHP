<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Novo Usuario</h1>
        <form action="">
            <label for="inputText" class="form-label">Nome</label>
            <input type="text" id="inputText" class="form-control" aria-describedby="passwordHelpBlock">
            <div class="row"> <!-- 2 linha-->
                <div class="col-md-3">
                    <label for="inputText" class="form-label">CPF</label>
                    <input type="text" id="inputText" class="form-control col-md-3" aria-describedby="passwordHelpBlock">
                </div>
                <div class="col-md-7">
                    <label for="inputText" class="form-label">Endereço</label>
                    <input type="text" id="inputText" class="form-control col-md-3" aria-describedby="passwordHelpBlock">
                </div>
                <div class="col-md-2">
                    <label for="inputText" class="form-label">Nível</label>
                    <select class="form-select " name="" id="">
                        <option value="">
                            -------
                        </option>
                    </select>
                </div>
            </div><!---Fim 2 lina-->

            <div class="row"> <!-- 3 linha-->
                <div class="col-md-7">
                    <label for="inputText" class="form-label">Email</label>
                    <input type="text" id="inputText" class="form-control col-md-3" aria-describedby="passwordHelpBlock">
                </div>
                <div class="col-md-3">
                    <label for="inputText" class="form-label">Senha</label>
                    <input type="text" id="inputText" class="form-control col-md-3" aria-describedby="passwordHelpBlock">
                </div>
                <div class="col-md-2">
                    <label for="inputText" class="form-label">Status</label>
                    <select class="form-select " name="" id="">
                        <option value="">
                            -------
                        </option>
                    </select>
                </div>
            </div><!---Fim 3 lina-->
            <div class=" row justify-content-end ">
                <div class="col-2 col-md-auto mt-3">
                    <button type="button" class="btn btn-success">Enviar</button>
                    <button type="button" class="btn btn-light " st>Cancelar</button>
               </div> 
        </form>

    </div><!--Fim Container div formulario-->
            <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>