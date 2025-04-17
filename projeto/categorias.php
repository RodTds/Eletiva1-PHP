<?php
  require_once("cabecalho.php");
  function retornaCategorias(){
    require('conexao.php');
    try {
    $sql = "SELECT * FROM categoria"; // 
    $stmt = $pdo->query($sql); 
    return $stmt->fetchAll(); // pega toso registro do banco de dados e retorna como array

    } catch (Exception $th) {
      die("Erro ao consultar categorias: ".$th->getMessage());
    }
  }
  $categorias = retornaCategorias(); // variavel recebe o retorno da função que sao todos registro da tabela categorias
?>
  
  <h2>Categorias</h2>
                        <a href="#" class="btn btn-success mb-3">Novo Registro</a>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                     foreach($categorias as $c): // per
                                 ?>
                                    <tr>
                                        <td><?= $c['id']?></td>
                                        <td><?=$c['nome']?></td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-info">Consultar</a>
                                        </td>
                                    </tr>  
                                  <?php
                                       endforeach;
                                   ?>
                            </tbody>
                        </table>
                

<?php
  require_once("rodape.php");
?>