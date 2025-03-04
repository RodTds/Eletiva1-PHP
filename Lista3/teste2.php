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
        }
    </style>
</head>

<body>
    <div class="menu">
        <h2>Menu Lateral</h2>
        <a href="#" onclick="carregarConteudo('exercicio1.php')">Exercício 1</a>
        <a href="#" onclick="carregarConteudo('exercicio2.php')">Exercício 2</a>
        <a href="#" onclick="carregarConteudo('exercicio3.php')">Exercício 3</a>
        <a href="#" onclick="carregarConteudo('exercicio4.php')">Exercício 4</a>
    </div>

    <div class="conteudo" id="conteudo">
        <!-- O conteúdo será carregado aqui -->
        Selecione uma opção do menu.
    </div>

    <script>
        // Função AJAX para carregar conteúdo
        function carregarConteudo(pagina) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", pagina, true); // Faz uma requisição GET para o arquivo PHP
            xhr.onload = function() {
                if (xhr.status == 200) {
                    document.getElementById("conteudo").innerHTML = xhr.responseText; // Insere o conteúdo na área principal
                } else {
                    console.error("Erro ao carregar conteúdo.");
                }
            };
            xhr.send();
        }
    </script>
</body>

</html>
