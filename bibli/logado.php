<!DOCTYPE html>
<html lang="en">
<!--<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="logado.php">Bibliotech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link disabled" href="perfil.php">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        
    </div>

</body>
</html>
-->

<!doctype html>
<html lang="pt-BR">
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
      <form class="d-flex" role="search" method="POST" action="perfil.php"> <!--enviando dados-->
        <button class="btn btn-outline-success" type="submit" name="pesqTitulo" id="pesqTitulo">Perfil</button> <!--Celke - video -->
      </form>
    </div>
  </div>
  
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">


<!--
    <form method="POST"action="">
    <label>Titulo</label>
    <input type="text" name="titulo_livro" placeholder="Digite o titulo:"><br><br>
    <input type="submit" name="pesqTitulo" id="pesqTitulo">

</form>
-->

<?php
include_once "conexao.php";
try{
    //execução da instrução SQL
    $consulta = $conectar->query("SELECT nomeCategoria, titulo, codLivro 
    FROM livro li INNER JOIN categoria as codCat 
    ON (codCat.codCategoria = li.codCategoria)");
    echo "<h1>Biblioteca IFRJ - CPIN</h1>";
    echo "<h2>Obras</h2>";
    
    echo "<table class='table table-striped'><tr><td>Titulo</td> 
    <td>Tema</td></tr>";

    

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
        echo "<tr><td>$linha[titulo]</td> <td>
        $linha[nomeCategoria]</td>  <td>";
       
    }
    echo "</table>";

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);

    if(!empty($dados['title'])){
        $titulo="%".$dados['title']."%";

        
        $query = "SELECT nomeCategoria, titulo, codLivro 
        FROM livro li INNER JOIN categoria as codCat 
        ON (codCat.codCategoria = li.codCategoria)WHERE titulo LIKE :titulo ORDER BY titulo ASC";
        $result = $conectar->prepare($query);
        $result ->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        echo"<h2>Resultado da Busca:</h2>";
        echo "<table class='table table-striped'><tr><td><h5>Titulo</h5></td> 
         <td><h5>Tema</h5></td> </tr>";

         
        

        $result->execute();



        while($linha = $result->fetch(PDO::FETCH_ASSOC)){
          echo "<tr><td>$linha[titulo]</td> <td>$linha[nomeCategoria]</td>></tr>";
          

        }

        echo "</table>";
        
      }
        


} catch(PDOException $e) {
    echo $e->getMessage();

}



?>
    
</div>

  
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>



