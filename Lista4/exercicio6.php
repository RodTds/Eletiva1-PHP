<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>6 - Numero arredondado</h1>
    </div>
    <div class="row">
        <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">

            <form action="" method="post">

                <form method="post">

                    <div class="mb-3">
                        <label for="valor" class="form-label">Insira o valor</label>
                        <input type="number" step="0.01" id="valor" name="valor" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </form>
        </div>
        <div class="row">
            <div class="container text-center" >
                <?php

                function arredonda($valor):void {
                    echo"A número arredondado é: ".round($valor);
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    try {
                       $valor = floatval($_POST['valor']);
                        arredonda($valor);
                            
                    } catch (Exception $e) {

                        echo "Erro : $e->getMessage()";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>