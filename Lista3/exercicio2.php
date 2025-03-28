<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class=" text-center">
        <h1>Somar</h1>
    </div>
    <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">

        <form method="post" class="" action="">

            <div class="mb-3">
                <label for="numero1" class="form-label">Numero 1</label>
                <input type="text" id="numero1" name="numero1" class="form-control">
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label">Numero 2</label>
                <input type="text" id="numero2" name="numero2" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mb-3 ">Enviar</button>
        </form>
    </div>

    <div class="container text-center" id="resultado">
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $num1 = $_POST['numero1'];
                $num2 = $_POST['numero2'];
                if ($num1 != $num2) {
                    $soma = $num1 + $num2;
                    echo "A soma dos valores é: $soma";
                } else {
                    $soma = ($num1 + $num2) * 3;
                    echo "A soma triplicada dos valores é: $soma";
                }
            } catch (Exception $e) {

                echo "Erro : $e->getMessage()";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>