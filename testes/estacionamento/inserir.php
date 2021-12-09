<?php 
require_once('conexao_banco_dados.php');

    session_start();

    $vaga_ocupada = $_SESSION['vaga'] ;
    $marca = $_SESSION['marca'];
    $modelo = $_SESSION['modelo'];
    $placa = $_SESSION['placa'];
    $nome_proprietario = $_SESSION['nomeProprietario'];
    $hora_entrada = $_SESSION['entrada'];
    $valor_hora = $_SESSION['valorHora'];

/*
    echo $nome_proprietario;
    echo $marca;
    echo $modelo;
*/

    $inserir = $pdo->prepare("INSERT INTO vaga set ID = :id, Marca = :marca, Modelo = :modelo, Placa = :placa,  Nome_Proprietario = :nome_proprietario, Hora_Entrada = :hora_entrada, Valor_Hora = :valor_hora");
    $inserir->bindValue(":id", $vaga_ocupada);
    $inserir->bindValue(":marca", $marca);
    $inserir->bindValue(":modelo", $modelo);
    $inserir->bindValue(":placa", $placa);
    $inserir->bindValue(":nome_proprietario", $nome_proprietario);
    $inserir->bindValue(":hora_entrada", $hora_entrada);
    $inserir->bindValue(":valor_hora", $valor_hora);
    $inserir->execute();
    echo ('Cadastro com sucesso');
    echo "Salvo com sucesso!";
    
    $deletar = $pdo->prepare("DELETE FROM `vaga` WHERE `vaga`.`ID` = 2");
    $deletar->execute();
    /*
    Vaga Ocupada
    Marca
    Modelo
    Placa
    Nome Proprietário
    Hora Entrada
    Valor Hora

    $inserir = $pdo->prepare("INSERT INTO vagas set Vaga Ocupada = :vaga_ocupada, Marca = :marca, Modelo = :modelo, Placa = :placa,  Nome Proprietário = :nome_proprietario, Hora Entrada = :hora_entrada, Valor Hora = :valor_hora");
   
    */
 ?>

 