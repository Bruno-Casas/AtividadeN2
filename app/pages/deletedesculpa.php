<?php
require_once '../connection/conectaBD.php';

session_start();
if (!empty($_GET['id'])) {
    try {
        $sql = "DELETE FROM desculpa WHERE id = :id_anuncio AND usuario_id = :userId";
        $stmt = $pdo->prepare($sql);

        $dados = array(':id_anuncio' => (int)$_GET['id'], ':userId' => $_SESSION['id']);

        if ($stmt->execute($dados)) {
            header("Location: ./profile.php");
            echo"<script>alert('excluido')</script>";
        } else {
            echo"<script>alert('não excluido')</script>";
        }
    } catch (PDOException $e) {
        //die($e->getMessage());
        echo $e;
        //header("Location: index_logado.php?msgSucesso=Falha ao EXCLUIR anúncio..");
        // echo"<script>alert('não excluido')</script>";
    
    }
}
