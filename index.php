<?php
  include('header.php');
  include('logica-usuario.php');
?>
  <?php if(isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca'] == true) { ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Você está não está conectado!</strong>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if(isset($_GET['login']) && $_GET['login'] == false) { ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Falha ao se conectar!</strong> usuário o senha inválidos!
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if(isset($_GET['logout']) && $_GET['logout'] == true) { ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Deslogado com sucesso!</strong>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">Bem Vindo</h3>
    </div>
  </div>
  <?php
    if(usuarioEstaLogado()) { ?>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Você está conectado!</strong> <?= $_SESSION['usuario_logado'];?>
          </div>
        </div>
      </div>
  <?php  }
    else { ?>
      <div class="row">
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
  <?php }?>
<?php
  include('footer.php');
?>
