

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quero doar</title>
</head>
<body>

    
            <form method="post" action="tratar.php" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="especie">Espécie</label>
                    <input type="text" class="form-control" id="especie"  placeholder="Gato, cachorro, etc..." name="especie">
                </div>
                <div class="form-group">
                    <label for="raca">Raça</label>
                    <input type="text" class="form-control" id="raca"  placeholder="Entre com a raça que deseja..." name="raca">
                </div>       
                <div class="form-group">
                        <label for="porte">Porte</label>
                        <input type="text" class="form-control" id="porte" placeholder="Pequeno, médio ou grande."  name="porte">
                    </div> 
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" id="sexo" placeholder="Macho ou Fêmea"  name="sexo">
                    </div> 
                <div class="form-group">
                        <label for="idade">Idade</label>
                        <input type="text" class="form-control" id="idade" placeholder="Filhote ou adulto."  name="idade">
                    </div> 
                    <div class="form-group">
                        <label for="doador">Doador</label>
                        <input type="text" class="form-control" id="doador" placeholder="Insira seu nome"  name="doador">
                    </div> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Insira seu email"  name="email">
                    </div> 
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="Insira seu telefone"  name="telefone">
                    </div> 
                
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

    
</body>
</html>