<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>
        <div class="text-center">
            <h1>Ordens de Entrada do Menor valor</h1>
        </div>


        <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">
            <form action="" method="post">

                <div class="mb-3 ">
                    <label for="numero" class="form-label">Infomre a Primeira nota</label>
                    <input type="text" id="numero" name="numero" class="form-control">
                </div>
                <div class="mb-3 ">
                    <label for="numero" class="form-label">Infomre a Primeira nota</label>
                    <input type="text" id="numero" name="numero" class="form-control">
                </div>
                <div class="mb-3 ">
                    <label for="numero" class="form-label">Infomre a Primeira nota</label>
                    <input type="text" id="numero" name="numero" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <div class="container text-center" id="resultado">
            <?php

            try {
                $num = $_POST['numero'];
                $nota = $_POST["nota$i"];
                echo $cont++;
            } catch (Exception $e) {
                echo "Erro : $e->getMessage()";
            }


            ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>