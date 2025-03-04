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

        /* Menu lateral */
        .menu {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            padding: 15px;
            box-sizing: border-box;
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
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h2>Menu Lateral</h2>
        <a href="?pagina=exercicio1">Exercício 1</a>
        <a href="?pagina=exercicio2">Exercício 2</a>
        <a href="?pagina=exercicio3">Exercício 3</a>
        <a href="?pagina=exercicio4">Exercício 4</a>
        <a href="?pagina=exercicio5">Exercício 5</a>
        <a href="?pagina=exercicio6">Exercício 6</a>
        <a href="?pagina=exercicio7">Exercício 7</a>
        <a href="?pagina=exercicio8">Exercício 8</a>
        <a href="?pagina=exercicio9">Exercício 9</a>
        <a href="?pagina=exercicio10">Exercício 10</a>
    </div>

    <div class="conteudo">
        <?php
        // Verifica se uma página foi selecionada
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
                case 'exercicio5.php':
                    include('exercicio5.php');
                    break;
                case 'exercicio6.php':
                    include('exercicio6.php');
                    break;
                case 'exercicio7.php':
                    include('exercicio7.php');
                    break;
                case 'exercicio8.php':
                    include('exercicio8.php');
                    break;
                case 'exercicio9.php':
                    include('exercicio9.php');
                    break;
                case 'exercicio10.php':
                    include('exercicio10.php');
                    break;
                default:
                    echo "Selecione uma opção do menu.";
                    break;
            }
        } else {
            // Caso não tenha sido selecionado nada, exibe uma mensagem padrão
            echo "Selecione uma opção do menu.";
        }
        ?>
    </div>
</body>

</html>