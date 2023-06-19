<?php
include("conexao.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];
//$id = $conectar->query("select codUsuario, nome, email, nomePerfil from usuario u inner join perfil p on (p.codPerfil = u.codPerfil) where nome='$nome'");
$sql = "INSERT INTO usuario(nome, email, senha, codPerfil) VALUES ('{$nome}' , '{ $email}' , '{$senha}' , '{$tipo}')";   
$res = $conectar->query($sql);
header("Location:conf.php");
?>