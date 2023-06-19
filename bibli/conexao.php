<?php

try{
    // Faz conexao com o banco de dados

    $conectar = new PDO("mysql:host=localhost;port=8889;dbname=pdo;", "iasmin", "");
    
      
} catch (PDOException $e) {
    //caso ocorra algum erro na conexao com o banco, exibe a mensagem
    echo 'Falha ao conectar com o banco de dados: ' . $e->getMessage();
}

?>