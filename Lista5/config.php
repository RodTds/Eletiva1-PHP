<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Configurações</h1>
    <!-- Formulário para acionar o botão -->
    <form method="POST">
        <button type="submit" name="encerrar_sessao" class="btn btn-danger">Encerrar Sessão</button>
    </form>

    <?php
       // Função para limpar a sessão
       function limparSessao(): void {
        
           session_destroy(); // Destrói a sessão
           echo "<p>Sessão encerrada!</p>";
       }

       // Verifica se o botão foi pressionado
       if (isset($_POST['encerrar_sessao'])) {
           limparSessao(); // Chama a função para destruir a sessão
       }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

