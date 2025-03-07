<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>

    <?php
    function manipularString(string $palavra) : void
    {
       echo"A palavra tem: ".strlen( $palavra) ." caracteres <br>";
       echo"Letra A subistituida por 4". str_replace("a","4: ",$palavra)."</P>";
    }
    function gerarValorAleatorio(int $inicial,int $final): int{
        return rand($inicial,$final);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $palavra = ($_POST['palavra']);
             manipularString($palavra);
             echo gerarValorAleatorio(1,20);
             $numero = 3.555555;
             echo"Mostrando duas casa decimais: ".number_format($numero,2,",",".")."</p>";
          

        } catch (Exception $e) {

            echo "Erro : $e->getMessage()";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>