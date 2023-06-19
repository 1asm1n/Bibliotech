<?php 

include("conexao.php");
include("salvar.php");
switch(@$_REQUEST["action"]){
    case "editar":
        $name = $_SESSION['name'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        //$id = filter_var($_GET['id']);
        var_dump($name);
        var_dump($nome);
        //$cod =$id->fetch(PDO::FETCH_ASSOC);
        $result = "update usuario set nome = '$nome' where nome = '$name'";
        $res = $conectar->query($result);
        $edit = $res->fetch(PDO::FETCH_ASSOC);
        header("Location : home.php"); 
        
    break;
    case "Excluir": 
        // expressão mysql $apagar = "delete from usuario where ('{email}')";

    break;
    case "Sair":
        
    break;
}   
?>