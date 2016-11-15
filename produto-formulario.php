<?php
  include('header.php');
  include('conecta.php');
  include('banco-categoria.php');
  include('logica-usuario.php');

  verificaUsuario();
  $produto = array(1 => "", 2 => "", 3 => "", 4 => "1", 5 => "unchecked");

?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" action="adiciona-produto.php" method="post">
        <fieldset>
          <legend>Cadastro de Produtos</legend>
          <?php include('produto-formulario-base.php');?>
        </fieldset>
      </form>
    </div>
  </div>

<?php
  include('footer.php');
?>
