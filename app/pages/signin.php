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
    require '../connection/conectaBD.php';
    $template = new TemplateEngine();

    if (!empty($_POST)) {
        require_once '../connection/conectaBD.php';
        try {
            $sql = "INSERT INTO usuario
                      (nome, data_nascimento, email, password)
                    VALUES
                      (:name, :data_nascimento, :email, :password)";

            $stmt = $pdo->prepare($sql);

            $dados = array(
                ':name' => $_POST['name'],
                ':data_nascimento' => $_POST['bornDate'],
                ':email' => $_POST['email'],
                ':password' => md5($_POST['password'])
            );

            if ($stmt->execute($dados)) {
                //header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
            }
        } catch (PDOException $e) {
            echo $e;
            //header("Location: index.php?msgErro=Falha ao cadastrar...");
        }
    } else {
        $template->apply('../templates/Screens/SignIn', []);
    }
    die();

    
    ?>
</body>

</html>