<?php
include_once "conexao.php";

try{
    $titulo = filter_var($_POST['titulo']); //parametros do name do formEdit
    $codLivro = filter_var($_POST['codLivro']);
    $categoria = filter_var($_POST['categoLivro']);


    $update =$conectar->prepare("UPDATE livro 
    SET titulo = :titulo, codCategoria = :codCategoria 
    WHERE codLivro = $codLivro");
    $update->bindParam(':titulo', $titulo);
    $update->bindParam(':codCategoria', $categoria);

    $update->execute();

    header("location:logadoadm.php");




} catch(PDOException $e) {

    echo 'Erro: ' . $e ->getMessage();
}
?> 