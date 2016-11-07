<?php
  include('header.php');?>

  <div class="row">
    <div class="col-md-4 col-md-offset-5">
      <h3>Bem Vindo</h3>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
      <?php if(isset($_GET['login']) && $_GET['login'] == true) { ?>
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Sucesso!</strong> Usuário logado!
        </div>
      <?php } elseif(isset($_GET['login']) && $_GET['login'] == false) {?>
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Erro!</strong> Usuário ou senha inválidos!
        </div>
      <?php } ?>
      </div>
    </div>
      <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" action="login.php" method="post">
          <fieldset>
            <legend>Entrar</legend>
            <div class="form-group">
              <label for="inputEmailUsuario" class="col-lg-2 control-label">Nome</label>
              <div class="col-lg-10">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSenhaUsuario" class="col-lg-2 control-label">Nome</label>
              <div class="col-lg-10">
                <input type="password" name="senha" class="form-control" placeholder="Senha">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Limpar</button>
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>


  </div>
<?php
  include('footer.php');
?>
