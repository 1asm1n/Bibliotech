<?php

session_start();
    include_once("salvar.php");
    include("conexao.php");
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    /*
    $query_usuario = $conectar->query("select codUsuario, nome, email, nomePerfil from usuario u inner join perfil p on (p.codPerfil = u.codPerfil)");
    echo "Usuários                                          ";
    while($sql = $query_usuario->fetch(PDO::FETCH_ASSOC)){
        echo "<TABLE>
        <tr><td> $sql[codUsuario]           $sql[nome]          $sql[email]         $sql[nomePerfil]           <a href='editarm.php?id=$sql[codUsuario]'>Editar</a>                     <a href='excluir.php?id=$sql[codUsuario]'>Excluir</a></td></tr>
        
        </TABLE>";
    }
    */
    
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
      <form class="d-flex" role="search" method="POST" action=""> <!--enviando dados-->
        <input class="form-control me-2" type="search" name="title" id="title" placeholder="Pesquisar" aria-label="search">
        <button class="btn btn-outline-success" type="submit" name="pesqTitulo" id="pesqTitulo">Pesquisar</button> <!--Celke - video -->
      </form>
    </div>
  </div>
</nav>
<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Biblioteca IFRJ - CPIN</h1>
    <h2>Informações de Usuários</h2>
    <a href='novo.php'>Novo Cadastro de Usuários</a>
    <?php
        //session_start();
        include_once("salvar.php");
        include("conexao.php");
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        //$id = $_SESSION["id"];
        //var_dump($id);
        $query_usuario = $conectar->query("select codUsuario, nome, email, nomePerfil from usuario u inner join perfil p on (p.codPerfil = u.codPerfil)");
        echo "<table class='table table-striped'><tr><td>Código</td><td>Nome</td><td>E-mail</td><td>Usuário</td><td>Ações</td></tr>";
        while($linha = $query_usuario->fetch(PDO::FETCH_ASSOC)) {
        
            echo "<tr><td>$linha[codUsuario]</td><td>$linha[nome]</td><td>$linha[email]</td><td>$linha[nomePerfil]</td> 
            <td><a href='editarm.php?id=$linha[codUsuario]'>Editar</a> -
            <a href='excluir.php?id=$linha[codUsuario]'>Excluir</a></td></tr>";
           
        }
        echo "</table>";
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($dados['title'])){
            $titulo="%".$dados['title']."%";
    
            $query = "select codUsuario, nome, email, nomePerfil from usuario u inner join perfil p on (p.codPerfil = u.codPerfil) ORDER BY codUsuario ASC";
            $result = $conectar->prepare($query);
            $result ->bindParam(':nome', $nome, PDO::PARAM_STR);
            
            $result->execute();
            while($linha = $result->fetch(PDO::FETCH_ASSOC)){
              echo"titulo:".$linha['codUsuario'];
              echo"tema:".$linha['nome'];
              echo"titulo:".$linha['email'];
              echo"tema:".$linha['nomePerfil'];
              echo "<a href='editarm.php?id=$linha[codUsuario]'>Editar</a>";
              echo "<a href='eft.php?id=$linha[codUsuario]'>Excluir</a>" ;
              
              //echo"<hr>";
            }
          }
        /*
        
        */
    ?>
    </div>
</main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>