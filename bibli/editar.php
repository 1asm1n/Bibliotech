<?php

include("conexao.php");
include("salvar.php");
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$tipo_Usuario = $_SESSION["tipo_usuario"];
$id = $_SESSION["id"];
$name = $_SESSION['name'];
$_SESSION['name'] = $nome[0];
var_dump($name); 
//$_SESSION['usuario'] = $_POST['user']; 
$s = $conectar->query("select codUsuario from usuario where nome = '$nome[0]'");
$id = $s->fetch(PDO::FETCH_ASSOC);
var_dump($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bibliotech</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="topo.css">
    </head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-ifrj">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.ifrj.edu.br/">IFRJ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<main class="container">
  <div class="bg-light p-5 rounded">
    <div class="text-center">
      <img src="ifrj.png" alt="Logo IFRJ" class="img-fluid" width="20%" height="20%">
    </div>
    <h1 class="text-center mt-3">Alteração de dados</h1>
    <div class="d-flex justify-content-center">
    <form action = "gravar.php" method="POST">
        <input type="hidden" name="action" value="editar">
        <div class= "mb-3">
            <label>Nome</label>
            <input type=" text" name="nome" class="form-control" value="<?php echo $nome[0];?>">
        </div>
        <div class= "mb-3">
            <label>E-mail</label>
            <input type=" text" name="email" class="form-control" value="<?php echo $nome[2];?>">
        </div>
        <div class= "mb-3">
            <button type="submit" name ="enviar" class= "btn bg-ifrj-btn">Enviar</button>
        </div>
</form>  
</body>
</html>