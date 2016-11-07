<?php
  include('conecta.php');
  include('banco-usuario.php');
  $emailUsuario = $_POST['email'];
  $senhaUsuario = $_POST['senha'];

  $usuario = buscaUsuario($conexao, $emailUsuario, $senhaUsuario);
  if($usuario == null) {
      header("Location: index.php?login=0");
  } else {
      header("Location: index.php?login=1");
  }
  die();
  //echo json_encode($usuario);
