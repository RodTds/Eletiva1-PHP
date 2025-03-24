<?php 
   declare(strict_types= 1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">

        <?php for ($i = 0; $i < 2; $i++): ?>

            <div class="container">
               
                <div class="row justify-content-center">
                    <h2 class="col-12 text-center mb-4">Dados do Produto</h2> 

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nome">Informe o Nome do Produto</label>
                            <input type="text" name="nome[]" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="preco">Informe o Preço</label>
                            <input type="number" name="preco[]" step="0.01" class="form-control">
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
                function inserirNoArray(array &$produtos,string $nome, float $preco):void{
                    $preco += $preco * 15 / 100;
                   
                    $produtos[] = array(
                        "nome" => $nome,
                        "preco" => $preco
                    );
                }
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    try {

                        $produtos = array();  
                        
                        for ($i = 0; $i < 2; $i++) {
                            $nome = strtoupper(strval($_POST['nome'][$i]));
                            $preco = floatval( $_POST['preco'][$i]);
                            inserirNoArray($produtos, $nome,  $preco);
                            }
                         
                        foreach ($produtos as $prod) {
                            
                            echo "<br> Nome: " . $prod['nome'] . " -- Preço: " . number_format($prod['preco'],2);
                            echo "<br>-----------------------------------------------------------------------------";
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