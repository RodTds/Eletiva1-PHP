<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula dia 13/03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <form action="index.php" method="post">
        <?php
        for ($i = 0; $i < 10; $i++): ?>
            <input type="number" name="valor[]" placeholder="Informe o valor<?= $i ?>" />
        <?php endfor; ?>
        <button type="submit">Enviar</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $valores = $_POST['valor'];
                echo"O primeiro valor é: ".$valores[0];
                echo"<br/>";
                $valores['texto'] = 'dados';// cria um indice a mais no vetor idependente do tipo
                echo"<br/>";
                print_r($valores);
                unset($valores['texto']); // apaga a posicao criada

            foreach ($valores as $posicao => $valor) { // FOREACH mostrando o valor e a posição
                 echo "<p>Posição: $posicao valor: $valor</p>";
            }  
            // TIPOS DE CRAICAO DE VETORES
            $array = [10,11,12,13];
            $array2 = array("uva","maçã","etc") ;
         

            } catch (Exception $th) {
                echo $th->getMessage();
            }
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>