<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade N2</title>
</head>
<body>
    <?php
        require './lib/engine.php';
        $template = new TemplateEngine();

        $variables = array(
            'variable' => 'Valor da variável'
        );

        $template->apply('../templates/exemple', $variables);
    ?>
</body>
</html>