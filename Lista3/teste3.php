<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Menu lateral fixo */
        .menu {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            padding: 15px;
            box-sizing: border-box;
            position: fixed; /* Fixa o menu na lateral */
        }

        .menu a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .menu a:hover {
            background-color: #575757;
        }

        /* Conteúdo */
        .conteudo {
            margin-left: 270px; /* Espaço para o menu lateral fixo */
            padding: 20px;
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h2>Menu Lateral</h2>
        <!-- Links do menu -->
        <a href="?pagina=exercicio1">Exercício 1</a>
        <a href="?pagina=exercicio2">Exercício 2</a>
        <a href="?pagina=exercicio3">Exercício 3</a>
        <a href="?pagina=exercicio4">Exercício 4</a>
    </div>

    <div class="conteudo">
        <?php
        // Verifica se uma página foi selecionada através do parâmetro 'pagina' na URL
        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];

            // Inclui o arquivo correspondente
            switch ($pagina) {
                case 'exercicio1':
                    include('exercicio1.php');
                    break;
                case 'exercicio2':
                    include('exercicio2.php');
                    break;
                case 'exercicio3':
                    include('exercicio3.php');
                    break;
                case 'exercicio4':
                    include('exercicio4.php');
                    break;
                default:
                    echo "<h2>Selecione uma opção do menu.</h2>";
                    break;
            }
        } else {
            // Caso não tenha sido selecionado nada, exibe uma mensagem padrão
            echo "<h2>Selecione uma opção do menu.</h2>";
        }
        ?>
    </div>
</body>
</html>
