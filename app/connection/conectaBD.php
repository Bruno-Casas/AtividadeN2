<?php

$endereco = 'postgres';
$banco = 'postgres';
$usuario = 'postgres';
$senha = 'admin';

try {
    
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco",
      $usuario,
      $senha,
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
  
  } catch (PDOException $e) {
    die($e->getMessage());
}
?>