<?php
    //var_dump($_POST);
    $especie = $_POST['especie'];
    $raça = $_POST['raca'];
    $porte = $_POST['porte'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $doador = $_POST['doador'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data
    try {
        include_once('conexao.php');
        // A variável $pdo, usada a seguir, está vindo do conexao.php

        $consulta = $pdo->prepare("INSERT INTO doar
        (especie, raca, porte, sexo, idade, doador, email, telefone)
        VALUES
        (:especie, :raca, :porte, :sexo, :idade, :doador, :email, :telefone)");

        $consulta->bindValue(":especie", $especie);
        $consulta->bindValue(":raca", $raça);
        $consulta->bindValue(":porte", $porte);
        $consulta->bindValue(":sexo", $sexo);
        $consulta->bindValue(":idade", $idade);
        $consulta->bindValue(":doador", $doador);
        $consulta->bindValue(":email", $email);
        $consulta->bindValue(":telefone", $telefone);

        $consulta->execute();

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }

    header('location: adocaorealizada.php');
?>