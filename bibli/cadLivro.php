<?php

session_start(); //iniciar sessao
ob_start(); //limpando buffer de saída


include_once "conexao.php";
//cadastro de livro


//receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);




if(!empty($dados)){
        
    $query_livro = "INSERT INTO livro
             (titulo, codCategoria)VALUES
             (:titulo, :categoria)";
    $cad_livro = $conectar->prepare($query_livro);      
    $cad_livro->bindParam(':titulo', $dados['titulo'], PDO::PARAM_STR);
    $cad_livro->bindParam(':categoria', $dados['categoria'], PDO::PARAM_INT); 
    $cad_livro->execute();   
    
    


    //$SESSION['msg'] = "<p style='color: green;'>Livro cadastrado com sucesso!</p>";
    header("Location: logadoadm.php");
    
}
/*
else
{
    $_SESSION['msg'] = "<p style='color: green;'>Erro no cadastro.</p>";
    header("Location: index.php");
}
*/