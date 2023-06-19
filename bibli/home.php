<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECH</title>

    <!---fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!---bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <!---scripts-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/07d50b2607.js" crossorigin="anonymous"></script>

    <!--progress bar--->
    <script src="js/progressbar.mim.js"></script>

    <!---parallax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<!--Logotipo_IF.svg.png-->
<link rel="shortcut icon" href="ifrj.png" type="image/x-icon">
<body>
   <header>
      <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">
                <img id="logo"src="Logotipo_IF.svg.png" > BIBLIOTECH
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <!-- <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav">
            <a class="nav-item nav link" id="home-menu">Home</a>
            <a class="nav-item nav link" id="aviso-menu">Avisos</a>
            <a href="file:///F:/TCC/html-css/testeTcc/TCC1/usuario.html?#" class="nav-item nav link" id="login-menu">Login</a>
            <a href="https://portal.ifrj.edu.br/pinheiralclass=" class= "nav-item nav link" id="contato-menu">Contato</a>
            </div>
           </div>-->
        </nav>
    </div>
 </header>
<main>
   <!--sobre a biblioteca-->
    <div id="about-area">
      <div class="container">
         <div class="row">
            <div class="col-12">
            <h3 class="main-title">BIBLIOTECH</h3>
            </div>
            <div class="col-md-6">
               <img class="img-fluid" src="biblioteca.png">

            </div>
            <div class="col-md-6">
             <h3 class="about-title">Biblioteca digital do IFRJ Pinheiral:</h3>
             <ul id="about-list">
               <li><i class="fas fa-check"></i>Livros didaticos e de ficção disponíveis; </li>
               <li><i class="fas fa-check"></i> Acesso a todos os títulos existentes na instituição; </li>
               <li><i class="fas fa-check"></i>Quadro de avisos com as informações do campus.</li>

             </ul>
             <p>Para ter acesso, faça seu login ou cadastre-se:</p>
             <from class="from" method="POST" action="home.php">
            <a class="btn btn-success" href="cadUsuario.php">Cadastro</a>
            <a class="btn btn-success" href="login.php">Login</a>
         </from>
         </div>
      </div>
   </div>
 <!--O que tem no nosso site-->
 <div id="services-area">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h3 class="main-title">Aqui você encontra:</h3>
            </div> 
         <div class="col-md-4 service-box">
            <i class="fa-solid fa-calendar-days"></i>
            <h4>Quadro de avisos</h4>
            <p>Fique por dentro de tudo o que está acontecendo no IFRJ.</p>
         </div>
         <div class="col-md-4 service-box">
            <i class="fa-solid fa-book-open"></i>
            <h4>Acervo</h4>
            <p>Visualize todos os títulos disponíveis na biblioteca do Campus-Pinheiral.</p>
         </div>   
         <div class="col-md-4 service-box">
            <i class="fa-solid fa-folder-open"></i>
            <h4>Rápido acesso</h4>
            <p>Livros separados por categorias que aceleram sua busca.</p>
         </div>      
   </div>
   </div>
 </div>
<!--Cursos do IF-->
<div id="team-area">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h3 class="main-title">Nossos cursos:</h3>
         </div>
         <div class="col-md-4">
            <div class="card">
               <img src="agroindustria.jpg" class="card-img-top" alt="Imagem Curso 1">
               <div class="card-body">
                  <h5 class="card-title">Agroindustria</h5>
                  <p class="card-text">O curso técnico em Agroindústria capacita seus alunos para lidarem com o processamento de alimentos nas áreas de laticínios, carnes e grãos. </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <img src="Agropecuária.jpg" class="card-img-top" alt="Imagem Curso 2">
               <div class="card-body">
                  <h5 class="card-title">Agropecuária</h5>
                  <p class="card-text">O curso técnico em Agropecuária capacita seus alunos para para executarem o planejamento e fiscalização de projetos agropecuários. </p>
               </div> 
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <img src="informatica.jpg" class="card-img-top" alt="Imagem Curso 3">
               <div class="card-body">
                  <h5 class="card-title">Informática</h5>
                  <p class="card-text">O curso técnico em Informática capacita seus alunos para lidarem com as tendências tecnológicas da atualidade e com as demandas dos setores produtivos. </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <img src="meioambiente.jpg" class="card-img-top" alt="Imagem Curso 4">
               <div class="card-body">
                  <h5 class="card-title">Meio Ambiente </h5>
                  <p class="card-text"> O curso técnico em Meio Ambiente capacita seus alunos para atenderem às demandas ambientais vigentes na sociedade, como preservação e produção sustentável.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <img src="adiministração.jpg" class="card-img-top" alt="Imagem Curso 5">
               <div class="card-body">
                  <h5 class="card-title">Administração  </h5>
                  <p class="card-text">O curso técnico em Administração capacita seus alunos para a execução das atividades de apoio administrativo em empresas públicas e privadas.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <img src="paisagismo.jpg" class="card-img-top" alt="Imagem Curso 5">
               <div class="card-body">
                  <h5 class="card-title">Paisagismo 

                  </h5>
                  <p class="card-text">O curso técnico em Paisagismo capacita seus alunos para planejarem e implantarem projetos de paisagismo e atividades de jardinagem, atendendo às demandas sociais.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</main>
<!--Rodapé-->
<footer>
   <div id="contact-area">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-md-4 contact-box">
               <i class="fas fa-phone"></i>
               <p><span class="contact-title">Ligue para:</span>(24) 3356-8200</p>
               <p><span class="contact-title">Email:</span> dg.cpin@ifrj.edu.br </p>
            </div>
            <div class="col-md-4 contact-box">
               <i class="fas fa-home"></i>
               <p><span class="contact-title">Enderço: </span>Rua José Breves, 550, Centro
                  Pinheiral - RJ
                  CEP: 27197-000</p>
            </div>
            <div class="col-md-4 contact-box">
               <i class="fa fa-share-alt-square" aria-hidden="true"></i>
               <p><span class="contact-title">Redes sociais</span>
               Instagram: </p>
               <p>Facebook:</p>
            </div>
            <div class="col-md-4 contact-box">
               <i class="fas fa-laptop" ></i>
               <p><span class="contact-title">Criadoras:</span>  Alana, Ester, Iasmin e Marcielle. Alunas do curso de informática.</p>
            </div>
            <div class="col-md-4 contact-box">
               <i class="fas fa-tags" ></i>
               <p><span class="contact-title">Sobre nós: </span>  O site foi criado como trabalho de conclusão de curso, pelas alunas que finalizarão sua formação em 2023.</p>
            </div>
            <div class="col-md-4 contact-box">
               <i class="fas fa-tags" ></i>
               <p><span class="contact-title">Academico: </span>Certificação e Diplomas</p>
               <P>Certficação ENEM</P>
            </div>
         </div>
      </div>
   </div>
   <div id="copy-area">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p>Desenvolvido por <a href="https://portal.ifrj.edu.br/pinheiral" target="_blank"> Alunas de Informatica</a> &copy; 2022</p>
            </div>
         </div>
      </div>
   </div>
</footer>
<script SRC="js/scripts.js"></script>
</body>
</html>
<?php
    include("conexao.php");
    switch(@$_REQUEST["page"]){
        case "novo":
            include("cadUsuario.php");
        break;
        case "login":
            include("login.php");
        break;
    }
?>



<li class="nav-item">
                        <a class="nav-link disabled" href="?page=login">Login</a>
                    </li>