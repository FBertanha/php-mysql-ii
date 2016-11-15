<?php
  include('header.php');
  include('conecta.php');
  include('banco-categoria.php');
  include('banco-produto.php');

  $id_produto = $_GET['id'];

  $produto = buscaProduto($conexao, $id_produto);
?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" action="altera-produto.php" method="post">
        <fieldset>
          <legend>Alterar Produto</legend>
          <?php include('produto-formulario-base.php');?>
        </fieldset>
      </form>
    </div>
  </div>

<?php
  include('footer.php');
?>
