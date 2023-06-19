<?php 
session_start();
include("conexao.php");
switch(@$_REQUEST["acao"]){
    case "cadastrar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sql = "INSERT INTO usuario(nome, email, senha, codPerfil) VALUES ('{$nome}' , '$email' , '{$senha}' , 1)";   
        $res = $conectar->query($sql);
        $_SESSION['nome'] = $nome;
        $_SESSION['tipo_usuario'] = $tipo_usuario;
        $_SESSION['email'] = $email;
        header("Location:login.php");
    break;

    case "login":
        
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $tipo_usuario = $_POST["tipo_usuario"];
        $email = $_POST["email"];
        
        if(isset($_POST['nome']) && isset($_POST["senha"])){
            if(strlen($_POST['nome']) ==0){
                echo "Preencha seu nome";
            }else if(isset($_POST['senha']) == 0){

                echo "<script>alert('Preencha o campo senha!')</script>";
            }else{
                $sql_code = "select *from usuario where nome = '$nome' and senha = '$senha' and codPerfil = '$tipo_usuario'";
                $sql_query = $conectar->query($sql_code) or die ("Falha na execução sql:" . $conectar->$error);
                $quant = $sql_query->rowCount();

                if($quant >0){
                    /*
                    $nome = $sql_query->fetch($conectar->FETCH_ASSOC);
                    $email = $sql_query->fetch($conectar->fetch_assoc);
                    $tipo_usuario = $sql_query->fetch($conectar->PDO::fetch_assoc);
                    $id = $sql_query->fetch($conectar->fetch_assoc);
                    */
                    $_SESSION['nome'] = $nome;
                    $_SESSION['tipo_usuario'] = $tipo_usuario;
                    $_SESSION['email'] = $email;
                   //redirecionamento de usuarios para páginas usuuario comum ou do administrador: 1 comum e 2 admin
                    
                   if(($tipo_usuario  == "1")){
                        header("Location:logado.php");
                        //echo "entrou if";
                    }else{
                        header("Location:logadoadm.php");
                        //echo "entrou else";
                    }
                    
                    //var_dump($tipo_usuario);
                   // header("Location:logadoadm.php");
                    
                }else{
                    $_SESSION['msg'] = "<div class = 'alert alert-danger' role ='alert'>Dados</div>";
                    header("Location:home.php");
                }
            }
        } 
        break;   
    }       
?>