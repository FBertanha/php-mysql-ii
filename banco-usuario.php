<?php
  function buscaUsuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "SELECT * FROM usuarios WHERE email_usuario = '{$email}' AND senha_usuario = '{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
  };
