<?php
session_start(); //iniciar sessao
ob_start(); //limpando buffer de saída


include_once "conexao.php";


//receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if(!empty($dados)){
        
    $query_categoria = "INSERT INTO categoria
                (nomeCategoria)VALUES
                (:nomeCategoria)";
    $cad_categoria = $conectar->prepare($query_categoria);   
    $cad_categoria->bindParam(':nomeCategoria', $dados['nomeCategoria'], PDO::PARAM_STR);  
    $cad_categoria->execute();  
   // var_dump($conectar->lastInsertId()); 
    $codCategoria = $conectar->lastInsertId();


    $SESSION['msg'] = "<p style='color: green;'>Livro cadastrado com sucesso!</p>";
    header("Location: logadoadm.php");
    
}/*else{
    $_SESSION['msg'] = "<p style='color: green;'>Erro no cadastro.</p>";
    header("Location: logadoadm.php");
}*/
?>