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
    
   
<?php

include_once "conexao.php"; 
    $codLivro = filter_var($_GET['id']);
    $consulta = $conectar->query("SELECT * FROM livro
    where codLivro = '$codLivro'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC); //array associativo que traz os dados do banco
    $titulo = $linha['titulo'];
    $categ = $linha['codCategoria'];
    
    ?> 

<form action="editLivro.php" method="post">
<h3>Edição de Obras</h3>
<p>
    Titulo:
    <input type="text" id="titulo" name="titulo"/> <!-- o id é para o javascript e o name é para o php-->
</p> 
    <p>Tema:    
                <select id="categoLivro" name="categoLivro">
                     <?php
                     
                           $query = "SELECT DISTINCT * FROM categoria";
                        
                            var_dump($conectar);
                            $aux = $conectar->query($query);   
                            $categorias = $aux->fetchAll();
                            var_dump($categorias);  

                            foreach($categorias as $categoria) //$categoria é o apelido de $categorias, que é o vetor que percorrerá as tabelas
                             {
                                $codCategoria = $categoria["codCategoria"];
                                $nomeCategoria = $categoria["nomeCategoria"];
                                echo "<option value=$codCategoria>$nomeCategoria</option>";

                                if (isset($_GET["categoria"]))
                                {
                                    if ($nomeCategoria == $livro->codCategoria)
                                    echo "<option value=$codCategoria selected>$nomeCategoria</option>";
                                }
                        
                            }
                            
                        ?>
                    </select>
        </p>
            
    <input type="hidden" name="codLivro" value="<?php echo $codLivro ?>">
    <p><input type="submit" value="Editar"></p>
</form>
<?php
echo"
<script>
    document.getElementById('categoLivro').value='$categ';
    document.getElementById('titulo').value='$titulo'; //coloca a variavel php 'titulo'no input html com javascript e jquery
</script>";
?>

</div>
  
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>




