<?php
require_once '../connection/conectaBD.php';

if (!empty($_POST)) {
    session_start();


    try {

        $sql = "SELECT id, nome, email, data_nascimento FROM usuario WHERE email = :email AND password = :senha";


        $stmt = $pdo->prepare($sql);


        $dados = array(
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['password'])
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
            header("Location: ./home.php"); // Fazer ambiente logado (indexLogado)
            echo "<script>alert('logado com sucesso')</script>";

        } else {
            session_destroy();

            // Redirecionar p/ página inicial (login)
            // header("Location: index.php?msgErro=E-mail e/ou Senha inválido(s).");
            echo "<script>alert('sem sucesso')</script>";
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
