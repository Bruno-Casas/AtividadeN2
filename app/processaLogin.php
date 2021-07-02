<?php
require_once 'conectaBD.php';


if (!empty($_POST)) {
  
  session_start();

  try {
    
    $sql = "SELECT nome, email, telefone, data_nascimento FROM usuario WHERE email = :email AND senha = :senha";

    
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
      $_SESSION['nome'] = $result['nome'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['data_nascimento'] = $result['data_nascimento'];
      $_SESSION['telefone'] = $result['telefone'];

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
}
else {
  header("Location: index.php?msgErro=Você não tem permissão para acessar esta página..");
}
die();

?>