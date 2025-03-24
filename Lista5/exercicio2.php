<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercicio 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form action="" method="post" class="w-50">

      <?php for ($i = 0; $i < 2; $i++): ?>
        <div class="row justify-content-center">

          <h2 class="text-center mb-4">Dados do Aluno</h2>

          <div class="mb-3">
            <label for="nome" class="form-label">Informe o nome</label>
            <input type="text" name="nome[]" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="n1" class="form-label">Informe a nota 1</label>
            <input type="number" name="n1[]" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="n2" class="form-label">Informe a nota 2</label>
            <input type="number" name="n2[]" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="n3" class="form-label">Informe a nota 3</label>
            <input type="number" name="n3[]" class="form-control" required>
          </div>
        </div>
      <?php endfor; ?>

      <div class="mb-3 text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>


  <div class="container d-flex justify-content-center">
    <div class="col-6">
      <?php
      function inserirNoArrayAluno(array &$alu, string $nome, float $n1, float $n2, float $n3): void
      {
        $media = ($n1 + $n2 + $n3) / 3;
        $alu[] = array(
          "nome" => $nome,
          "media" => $media
        );
      }
      function Ordenar(&$alunos): void
      {
        // Ordenar os alunos pela média (em ordem crescente)
        usort($alunos, function ($a, $b) {
          return $a['media'] <=> $b['media'];
        });
        exibirResultado($alunos);  // chamando esta função dentro de outra
      }
      function exibirResultado($alunos): void
      {
        echo "<ul class='list-group'>";
        foreach ($alunos as $aluno) {
          echo "<li class='list-group-item'>Nome: " . $aluno['nome'] . " -- Média: " . number_format($aluno['media'], 2, ',', '.') . "</li>";
        }
        echo "</ul>";
      }
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
          $alunos = array();  //  array de alunos

          // recebendo os dados dos alunos do inputs
          for ($i = 0; $i < 2; $i++) {
            $nome = strval($_POST['nome'][$i]);
            $nota1 = floatval($_POST['n1'][$i]);
            $nota2 = floatval($_POST['n2'][$i]);
            $nota3 = floatval($_POST['n3'][$i]);
            inserirNoArrayAluno($alunos, $nome, $nota1, $nota2, $nota3);
          }
          Ordenar($alunos); // chame esta func e dentro dela a Funcao exibir
        } catch (Exception $e) {
          echo  $e->getMessage();
        }
      }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>