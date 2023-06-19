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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    
    
<form action="cadLivro.php" method="POST">
    <h3>Dados do livro</h3>
    Titulo:<input type="text"name="titulo" id="titulo"><br>
    
    <p>Tema:    
                
                     <?php
                          include_once "conexao.php";
                          
                           $query = "SELECT DISTINCT * FROM categoria";
                          
                            $aux = $conectar->query($query);   
                            $categorias = $aux->fetchAll();  
                            //var_dump($categorias);
                            echo "<select name=categoria>";
                            foreach($categorias as $categoria) //$categoria é o apelido de $categorias, que é o vetor que percorrerá as tabelas
                             {
                                $codCategoria = $categoria["codCategoria"];
                                $nomeCategoria = $categoria["nomeCategoria"];
                                echo "<option value=$codCategoria>$nomeCategoria</option>";
                                /*
                                if (isset($_GET["categoria"]))
                                {
                                    if ($nomeCategoria == $query->codCategoria)
                                    echo "<option value=$codCategoria selected>$nomeCategoria</option>";
                                }
                                */
                            }
                            
                        ?>
                    </select>
        </p>


        <input type="hidden" name="categoLivro" value="<?php echo $nomeCategoria ?>">
        <p><input type="submit" value="Cadastrar"></p>
    
</form>
</div>
<?php

echo"
<script>
    document.getElementById('categoLivro').value='$codCategoria';
    document.getElementById('titulo').value='$titulo'; //coloca a variavel php 'titulo'no input html com javascript e jquery
</script>";
?>
  
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
