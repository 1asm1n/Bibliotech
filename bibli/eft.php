<!--php
/*include("conexao.php");
include("salvar.php");
switch(@$_REQUEST["efetue"]){
    case "edit":
        $tipo_usuario= $_POST["tipo_usuario"];
        $id = $_POST["id"];
        if(isset($_POST['update'])){
            $sqlUpdate = "UPDATE usuario set codPerfil ='{$tipo_usuario}' where codUsuario = '{$id}'";
            var_dump($tipo_usuario);
            $re = $conectar->query($sqlUpdate);
            header("Location : conf.php");
        }else{}
        
        
    break;
    case "excluir":
    break;
} 
?>   
-->

<?php
include_once "conexao.php";

try{
    $nome = filter_var($_POST['nome']); 
    $email = filter_var($_POST['email']);//parametros do name do formEdit
    $codUsuario = filter_var($_POST['codUsuario']);


    $update =$conectar->prepare("UPDATE usuario 
    SET nome = :nome, email = :email
    WHERE codUsuario = $codUsuario");
    $update->bindParam(':nome', $nome);
    $update->bindParam(':email', $email);


    $update->execute();

    header("location:conf.php");




} catch(PDOException $e) {

    echo 'Erro: ' . $e ->getMessage();
}
?> 