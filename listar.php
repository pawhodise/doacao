<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">    
</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
            <th>Especie</th>
            <th>Raça</th>
            <th>Porte</th>
            <th>Sexo</th>
            <th>Idade</th>
            <th>Doador</th>
            <th>Email</th>
            <th>Telefone</th>
        </thead>
<?php
    try {
        require('conexao.php');
        // A variável $pdo, usada a seguir, está vindo do conexao.php

        $consulta = $pdo->prepare("SELECT doar.especie, doar.raca, doar.porte, doar.sexo, doar.idade, doar.doador, doar.email, doar.telefone
        FROM mydb.doar");
        $consulta->execute();

        $doadores = $consulta->fetchAll();
        /*
        for($i = 0; $i < count($alunos); $i++) {
            echo "<p>{$alunos[$i]["nome"]}</p>";
        }
        */
        foreach($doadores as $doador) {
            echo "<tr>
                    <td>{$doador["especie"]}</td>
                    <td>{$doador["raca"]}</td>
                    <td>{$doador["porte"]}</td>
                    <td>{$doador["sexo"]}</td>
                    <td>{$doador["idade"]}</td>
                    <td>{$doador["doador"]}</td>
                    <td>{$doador["email"]}</td>
                    <td>{$doador["telefone"]}</td>
                </tr>";
        }

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }    
?>    
    </table>
    <p><a href="index.html">Voltar ao início.</a></p>
    <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
