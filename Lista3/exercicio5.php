<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h1>Exibir o mes</h1>
    </div>
    <div class="row">
        <div class="container d-flex justify-content-center align-items-center col-3 mt-5 mb-3">

            <form action="" method="post">

                <form method="post">

                    <div class="mb-3">
                        <label for="valor" class="form-label">Insira o valor</label>
                        <input type="text" id="valor" name="valor" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </form>
        </div>
        <div class="row">
            <div class="container text-center">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    try {
                        $valor = $_POST['valor'];
                        switch ($valor) {
                            case 1:
                                echo "Janeiro";
                                break;
                            case 2:
                                echo "Fevereiro";
                                break;
                            case 3:
                                echo "Março";
                                break;
                            case 4:
                                echo"Abril";
                                break;
                            case 5:
                                echo "Maio";
                                break;
                            case 6:
                                echo "Junho";
                                break;
                            case 7:
                                echo "Julho";
                                break;
                            case 8:
                                echo "Agosto";
                                break;
                            case 9:
                                echo "Stembro";
                                break;
                            case 10:
                                echo "Outubro";
                                break;
                            case 11:
                                echo "Novembro";
                                break;
                            case 12:
                                echo "Dezembro";
                                break;
                            default:
                                echo "Mês inválido!";
                                break;
                        } // switch

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