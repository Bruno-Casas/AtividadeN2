<?php
require_once 'conectaBD.php';


if (!empty($_POST)) {  
  try {    
      $sql = "INSERT INTO usuario
                (nome, data_nascimento, telefone, email, senha)
              VALUES
                (:nome, :dataNascimento, :telefone, :email, :senha)";

      $stmt = $pdo->prepare($sql);

      
      $dados = array(
        ':nome' => $_POST['name'],
        ':dataNascimento' => $_POST['bornDate'],
        ':telefone' => $_POST['telefone'],
        ':email' => $_POST['email'],
        ':senha' => md5($_POST['password'])
      );
      
      if ($stmt->execute($dados)) {
        header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
      }
  } catch (PDOException $e) {
      header("Location: index.php?msgErro=Falha ao cadastrar...");
  }
}
else {
  header("Location: index.php?msgErro=Erro de acesso.");
}
die();

?>