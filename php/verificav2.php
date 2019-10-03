<?php
    require 'aluno.php';
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $nota = $_POST["nota"];
    $aluno = new aluno($nome, $matricula, $nota);
    $situacao = $aluno->verificaSituacao();
    echo $situacao;