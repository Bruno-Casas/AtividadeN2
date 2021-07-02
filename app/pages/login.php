<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7d00217c81.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/global.css">

    <title>Atividade N2</title>
</head>

<body>
    <?php
    require '../lib/engine.php';
    $template = new TemplateEngine();

    if (!empty($_POST)) {
        require_once '../connection/conectaBD.php';

        session_start();

        try {

            $sql = "SELECT id, nome, email, data_nascimento FROM usuario WHERE email = :email AND password = :senha";


            $stmt = $pdo->prepare($sql);


            $dados = array(
                ':email' => $_POST['email'],
                ':senha' => md5($_POST['senha'])
            );

            $stmt->execute($dados);
            //$stmt->execute(array(':email' => $_POST['email'], ':senha' => $_POST['senha']));

            $result = $stmt->fetchAll();

            if ($stmt->rowCount() == 1) { // Se o resultado da consulta SQL trouxer um registro
                // Autenticação foi realizada com sucesso

                $result = $result[0];
                // Definir as variáveis de sessão
                $_SESSION['id'] = $result['id'];
                $_SESSION['nome'] = $result['nome'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['data_nascimento'] = $result['data_nascimento'];

                // Redirecionar p/ página inicial (ambiente logado)
                header("Location: indexLogado.php"); // Fazer ambiente logado (indexLogado)

            } else {
                session_destroy();

                // Redirecionar p/ página inicial (login)
                header("Location: index.php?msgErro=E-mail e/ou Senha inválido(s).");
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } else {
        $variables = array(
            'variable' => 'Valor da variável'
        );
    
        // $template->apply('../templates/exemple', $variables);
        $template->apply('../templates/Screens/Login', $variables);
        //header("Location: index.php?msgErro=Você não tem permissão para acessar esta página..");
    }

    ?>
</body>

</html>