<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">

        <?php for ($i = 0; $i < 2; $i++): ?>

            <div class="container">

                <div class="row justify-content-center">
                    <h2 class="col-12 text-center mb-4">Dados do Livro</h2>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="titulo">Informe o Titulo do Livro</label>
                            <input type="text" name="titulo[]" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="quantidade">Informe Quantidade em Estoque</label>
                            <input type="number" name="quantidade[]" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        <div class="container">
            <div class="row">
                <div class="col-1 mx-auto ">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <?php
                // & o e comercial na função sisgnifica que esou passando a referenciado vetor
                function inserirNoArray(array &$livros, string $titulo, int $quantidade): void
                {


                    $livros[] = array(
                        "titulo" => $titulo,
                        "quantidade" => $quantidade
                    );
                }
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    try {

                        $livros = array();
                         $mostrarAlerta =false;
                        for ($i = 0; $i < 2; $i++) {
                            $titulo = strtoupper(strval($_POST['titulo'][$i]));
                            $quantidade = intval($_POST['quantidade'][$i]);
                            inserirNoArray($livros, $titulo,  $quantidade);
                        }

                        foreach ($livros as $exemplar)
                         {
                            if($exemplar['quantidade'] < 5){
                                $mostrarAlerta = true;
                            }
                            
                            $corAlerta = "red"; // Você pode trocar por qualquer cor desejada

                        
                            echo "<br> Titulo: " . $exemplar['titulo'] . " -- Quantidade: " . $exemplar['quantidade'];
                            if ($mostrarAlerta) {
                                // Mensagem de alerta
                                echo "<div class=mt-3 style='background-color:  $corAlerta; color: white; padding: 15px; text-align: center; border-radius: 5px;'>
                                        <strong>Atenção! </strong> Quantidade em Estoque deste exemplar esta abaixo de 5.
                                      </div>";
                            }
                            echo "<br>----------------------------------------------------------------------";
                        }
                    } catch (Exception $e) {
                        echo  $e->getMessage();
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>