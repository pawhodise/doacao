<?php
    try {
        $pdo = new PDO("mysql:host=localhost:3306;dbname=sgtcc_b", "root", "root");

        $pdo->exec('SET NAMES utf8');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->prepare("SELECT * FROM curso WHERE ativo = 1");
    
        $consulta->execute();

    } catch(PDOException $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }

    $cursos = $consulta->fetchAll();
?>  
<!DOCTYPE html>
<html lang="pt-br">
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
    <form method="post" action="tratar.php">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
    </div>  
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" minlength="11" maxlength="11" placeholder="12345678900" name="cpf">
    </div>     
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
    </div>   
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="fulano@email.com" name="email">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Telefone" name="telefone">
    </div>
    <div class="form-group">
        <label for="curso">Curso</label>
        <select class="form-control" id="curso" name="curso">

<?php
    for($i = 0; $i < count($cursos); $i++) {
        echo "<option value='".$cursos[$i]['id']."'>" . $cursos[$i]['nome'] . "</option>";
    }
?>
        </select>
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    
    <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>