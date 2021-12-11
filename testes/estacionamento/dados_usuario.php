<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    echo $usuario;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    echo $_SESSION['usuario'];
    require('dados_veiculo.php');
?>