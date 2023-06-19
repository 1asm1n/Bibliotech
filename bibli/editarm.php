<!--session_start();
include("conexao.php");

/*include("salvar.php");
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$tipo_Usuario = $_SESSION["tipo_usuario"];
$id = filter_var($_GET['id']);
if(!empty($_GET['id'])){
    $id = filter_var($_GET['id']);
    $dados= $conectar->query("select nome, email from usuario u inner join perfil p on (p.codPerfil = u.codPerfil) where codUsuario = $id");
    while($sql = $dados->fetch(PDO::FETCH_ASSOC)) {
        echo "<TABLE>
        <tr><td> Nome : $sql[nome]</td></tr> <tr><td> E-mail : $sql[email]</td> <tr></tr>
        
        </TABLE>";
    }
}
?>

Parte visua
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "eft.php" method="POST">
        <input type="hidden" name="efetue" value="edit">
        <div>
            <label>Tipo de usuário</label>
                <select name="tipo_usuario" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Usuario Comum</option>
                    <option value="2">Administrador</option>
                </select><br />
            </label>
        </div>
        <input type="hidden" name = "id" value ="<?php echo $id?>">
        <input type="submit" name ="update" id = "update">
    </form>  
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
    $codUsuario = filter_var($_GET['id']);
    $consulta = $conectar->query("SELECT * FROM usuario
    where codUsuario = '$codUsuario'");
    $linha = $consulta->fetch(PDO::FETCH_ASSOC); //array associativo que traz os dados do banco
    $nome = $linha['nome'];
    $email = $linha['email'];
    
    ?> 

<form action="eft.php" method="post">
<h3>Edição de Usuários</h3>
<p>
    Nome:
    <input type="text" id="nome" name="nome"/> 
</p>

<p>
    Email:
    <input type="text" id="email" name="email"/><!-- o id é para o javascript e o name é para o php-->
</p> 
   <!-- <p>Tema:    
                <select id="categoLivro" name="categoLivro">
                     php aqui
                          /* $query = "SELECT DISTINCT * FROM categoria";
                        
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
        </p>*/ -->
            
    <input type="hidden" name="codUsuario" value="<?php echo $codUsuario ?>">
    <p><input type="submit" value="Editar"></p>
</form>
<?php
echo"
<script>
    document.getElementById('nome').value='$nome';
    document.getElementById('email').value='$email'; //coloca a variavel php 'titulo'no input html com javascript e jquery
</script>";
?>

</div>
  
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
