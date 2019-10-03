<?php
    require 'aluno.php';
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $nota = $_POST["nota"];
    $aluno = new aluno($nome, $matricula, $nota);
    $situacao = $aluno->verificaSituacao();?>
    <!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css"  href="../styles/estilo.css" />
        <!--[if lte IE 8]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->   
</head>
<body>
    <nav class="navegacao">
        <ul class="menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Sobre</a></li>
              <li><a href="#">Links</a></li>
              <li><a href="#">Contato</a></li>                
        </ul>
      </nav>
      <div class="container">
            <div class="cabecalho">
                <div class="logo">
            
                    <img src="../img/ifsudeste.png">
                
                </div>
                <div class="titulo"> 
                    <p>Sistema de verificação</p>
                </div>
            
            </div>
           
            <div id="resultado" class="resultado">
               <?php 
                echo "<p class=\"".$situacao."\">O aluno ".$nome." foi ".$situacao."</p>";
               ?>
            </div>

      </div>
</body>
</html>



