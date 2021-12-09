<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

    require('dados_veiculo.php');
?>