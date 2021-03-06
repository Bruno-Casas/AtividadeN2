<?php
    session_start();

?>

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
    
    $sql = "SELECT * FROM desculpa";

    try {
        
        $stmt = $pdo->prepare($sql);

        if($stmt->execute()){
            $desculpas = $stmt->fetchAll();
        }else{
            echo "Falha ao consultar banco de dados!";
        }

    } catch (PDOException $e) {
        echo ("Ocorreu um erro ao listas");
    }

    $template = new TemplateEngine();

    $variables = array(
        // 'variable' => 'Valor da variável'
        'desculpas' => $desculpas,
        'userName' => $_SESSION['nome']
    );

    // $template->apply('../templates/exemple', $variables);
    $template->apply('../templates/Screens/Home', $variables);
    ?>
</body>

</html>