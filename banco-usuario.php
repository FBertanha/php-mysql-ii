<?php
  function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $query = "SELECT * FROM usuarios WHERE email_usuario = '{$email}' AND senha_usuario = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
  };