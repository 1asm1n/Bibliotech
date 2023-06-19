<?php
include("conexao.php");
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
    
    <h1 class="text-center mt-3">Cadastro</h1>
    <div class="d-flex justify-content-center">
    <form action = "salvaradm.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class= "mb-3">
            <label>Nome</label>
            <input type=" text" name="nome" class="form-control">
        </div>
        <div class= "mb-3">
            <label>email</label>
            <input type=" text" name="email" class="form-control">
        </div>
        <div class= "mb-3">
            <label>senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div>
            <label>Tipo de usuário</label>
                <select name="tipo" class="form-select">
                    <option value="">Selecione</option>
                    <option value="1">Usuario Comum</option>
                    <option value="2">Administrador</option>
                </select><br />
            </label>
        </div>
        <div class= "mb-3">
            <button type="submit" class= "btn bg-ifrj-btn">Enviar</button>
        </div>
    </form>
  </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html>