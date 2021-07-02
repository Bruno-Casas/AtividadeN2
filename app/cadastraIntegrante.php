<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realize seu cadastro(a)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
    <body>
    
        <div class="container">
            <h1>Cadastrar Novo(a) Integrante</h1> 
            <form action="processaUsuario.php" method="post">
            <div class="col-4">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="col-4">
                <label for="dataNascimento">Data Nascimento</label>
                <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="1980-01-01">
            </div>
            <div class="col-4">
                <label for="telefone">Telefone para contato</label>
                <input type="tel" name="telefone" id="telefone" class="form-control">
            </div>
            <div class="col-4">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="col-4">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div> <br>
            <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $nome = $_REQUEST['nome'];    
    $dataNascimento = $_REQUEST['dataNascimento'];    
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];

    if (empty($nome) or strstr($nome, ' ')) {        
        $nome= htmlentities($nome);
        echo ("<h1>Preencha o campo nome</h1> <br>");
    } else if (empty($dataNascimento) or strstr($dataNascimento, ' ')) {
        $dataNascimento= htmlentities($dataNascimento);
        echo ("<h1>Preencha o campo data nascimento</h1> <br>");
    } else if (empty($email) or strstr($email, ' ')) {
        $email= htmlentities($email);
        echo ("<h1>Preencha o campo email</h1> <br>");
    } else if (empty($Telefone) or strstr($Telefone, ' ')) {
        $telefone= htmlentities($telefone);
        echo ("<h1>Preencha o campo Telefone</h1> <br>");
    } else if (preg_match('/[^a-z]/i', $nome)) {        
        echo ("<h1>Campo Nome invalido volte e digite novamente</h1>");
    } else {
        $usuario = array(
            "Usuario Cadastrado com Sucesso: " ,"Nome: " . $nome, " Data Nascimento: " . $dataNascimento, "Email: " . $email, " Telefone: " . $Telefone
        );

        foreach ($usuario as $dadosPreenchidos) {            
            echo "<div class='row'>  <h2>$dadosPreenchidos</h2> </div>";
        }
    }
}
?>