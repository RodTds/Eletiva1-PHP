<?php 
   declare(strict_types= 1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">

        <?php for ($i = 0; $i < 3; $i++): ?>

            <div class="container">
               
                <div class="row justify-content-center">
                    <h2 class="col-12 text-center mb-4">Dados do Produto</h2> 

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="codigo">Informe o Código</label>
                            <input type="number" name="codigo[]" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nome">Informe o Nome</label>
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
                function inserirNoArray(array &$produtos,int $codigo,string $nome, float $preco):void{
                    if($preco >100.00)
                        $preco -= $preco *10 /100;
                    $produtos[] = array(
                        "codigo" => $codigo,
                        "nome" => $nome,
                        "preco" => $preco
                    );
                }
                function Ordenar(&$produtos):void{
                    usort($produtos, function ($a, $b) {
                        return strcmp($a['nome'], $b['nome']);  // Ordena em ordem alfabética pelo nome
                    });
                    exibirResultado($produtos);
                }
                    function exibirResultado(&$produtos):void{
                        foreach ($produtos as $prod) {
                            
                            echo "<br> Codigo: " . $prod['codigo'] . " -- Nome: " . $prod['nome'] . " -- Preço: " . number_format($prod['preco'],2);
                            echo "<br>-----------------------------------------------------------------------------";
                        }
                    
                    }
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    try {

                        $produtos = array();  
                        
                        for ($i = 0; $i < 3; $i++) {
                            $codigo =  intval(( $_POST['codigo'][$i]));
                            $nome = strtoupper(strval($_POST['nome'][$i]));
                            $preco = floatval( $_POST['preco'][$i]);
                           
                            inserirNoArray($produtos, $codigo, $nome,  $preco);
                            }
                            Ordenar($produtos); // chamo a função ordenar e dentro chamo a FUNÇÂO exibir resultados

                        
                       
                      
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