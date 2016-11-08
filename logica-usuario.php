<?php
  session_start();
  function usuarioEstaLogado() {
    return isset($_SESSION['usuario_logado']);
  };

  function verificaUsuario() {
      if(!usuarioEstaLogado()) {
        header("Location: index.php?falhaDeSeguranca=1");
        die();
      };
  };

  function usuarioLogado() {
    if(usuarioEstaLogado()) {
      return $_SESSION['usuario_logado'];
    };
  };

  function logaUsuario($emailUsuario) {
    $_SESSION['usuario_logado'] = $emailUsuario;
  };

  function deslogaUsuario() {
    //unset($_SESSION['usuario_logado']);//Assim ou..
    session_destroy();
    header("Location: index.php?logout=1");
    die();
  };
