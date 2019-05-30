<?php
   
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "insert into cadastro1 (nome,email,mensagem) values ('$nome','$email','$mensagem')";
$salvar = mysqli_query($conexao, $sql); 


mysqli_close($conexao);


?>   

<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Portfolio Maicon Carvalho</title>
      <link rel="stylesheet" href="estilo.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
      <div class="wrapper">
            <header>
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <a name="#Home">Maicon Carvalho</a>
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="#Home">Inicio</a></li>
                                    <li><a href="#Serviços">Serviços</a></li>
                                    <li><a href="#Projetos">Projetos</a></li>
                                    <li><a href="sobre.html" target="_blank">Sobre</a></li>
                                    <li><a href="index.php" target="_blank">Contatos</a></li>
                              </ul>
                        </div>
                  </nav>

               </header>
     <section class="tamanho-loja">
                  <ul id="album-fotos">
                        <div class="projetos">
                              <h1><a name="Projetos">Projetos</a></h1>
                        </div>
                        <li id="foto01">
                              <spam>Site de restaurante</spam>
                        </li>
                        <li id="foto02">
                              <spam>Blog de Notícias</spam>
                        </li>
                        <li id="foto03">
                              <spam>Blog em Wordpress</spam>
                        </li>
                        <li id="foto04">
                              <spam>Edição de vídeo</spam>
                        </li>
                        <li id="foto05">
                              <spam>Site de hospital</spam>
                        </li>
                        <li id="foto06">
                              <spam>Programa calculadora</spam>
                        </li>
                        <li id="foto07">
                              <spam>Noticias agora</spam>
                        </li>
                        <li id="foto08">
                              <spam>Receitas saudáveis</spam>
                        </li>
                  </ul>


     </section>
            
     <section>
               <ul id="album-fotos-servicos">
                       <div class="projetos">
                           <h1><a name="Serviços">Serviços</a></h1>
                       </div>
                           <li id="foto01">
                              <spam>Criação de sites</spam>
                           </li>
                           <li id="foto02">
                              <spam>Criação de Blogs</spam>
                           </li>
                           <li id="foto03">
                              <spam>Criação de Sistemas</spam>
                           </li>
                           <li id="foto04">
                              <spam>Edição de vídeo</spam>
                           </li>

               </ul>

    </section>
         
    <script type="text/javascript">

                  // Menu-toggle button

                  $(document).ready(function () {
                        $(".menu-icon").on("click", function () {
                              $("nav ul").toggleClass("showing");
                        });
                  });

            
    </script>


</body>
</html>
