<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>    
    <div class="container">
    <h1>Olá, seja bem vindo(a)!</h1>
    <form  class="" action="processaLogin.php" method="post">
        <div class="col-4">
            <label for="email">E-mail</label>   
            <input type="email" name="email" id="email" class="form-control"> 
        </div>
        <div class="col-4">
            <label for="senha">Senha</label>   
            <input type="password" name="senha" id="senha" class="form-control">             
        </div><br>
        <button type="submit" name="enviarDados" class="btn btn-primary">Entrar</button>
        <a href="cadastraIntegrante.php" class="btn btn-warning">Cadastrar-se</a>        
    </form>
    </div>
</body>
</html>