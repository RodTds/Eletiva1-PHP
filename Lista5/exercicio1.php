<?php
  $tamanho =0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
</head>
    <h1>Cadastro de Contatos</h1>
    <form action="" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="telefone">Número de Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <input type="submit" value="Adicionar Contato">
    </form>

    <h2>Lista de Contatos:</h2>
    <?php
    // Verifica se a variável de sessão de contatos já foi inicializada
    if (!isset($_SESSION['contatos'])) {
        $_SESSION['contatos'] = [];
    }
    
    // Processa o formulário quando os dados são enviados
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
       
        // Verifica se o nome ou telefone já existe na lista de contatos
        $existe = false;
        foreach ($_SESSION['contatos'] as $contato) {
            if ($contato['nome'] === $nome || $contato['telefone'] === $telefone) {
                $existe = true;
                break;
            }
        }

        if (!$existe && $tamanho < 6) {
            // Adiciona o novo contato
            $_SESSION['contatos'][] = ['nome' => $nome, 'telefone' => $telefone];
        } else {
            echo "<p>Erro: Já existe um contato com o nome '$nome' ou telefone '$telefone'.</p>";
        }
        $tamanho++;
    }

    // Ordena os contatos pelo nome
    usort($_SESSION['contatos'], function($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });

    // Exibe os contatos acumulados
    if (count($_SESSION['contatos']) > 0) {
        echo "<ul>";
        foreach ($_SESSION['contatos'] as $contato) {
            echo "<li><strong>{$contato['nome']}:</strong> {$contato['telefone']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Não há contatos registrados.</p>";
    }
    ?>
    
</body>
</html>
