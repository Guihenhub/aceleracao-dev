<?php
    require_once('ex_75/Aluno.php');
    require_once('ex_75/Tuma.php');

    $aluno1 = new Aluno('012','Joãozinho','Souza','5495438954','123434',15,1);
    $aluno2 = new Aluno('023','Ana','Paula','50065065','4342344',16,2);
    $aluno3 = new Aluno('033','Fabio','Lima','30065065','3342344',14,1);
    
    $alunos = [$aluno1, $aluno2];

    $turma = new Turma(2000, 'Torma bacana', $alunos, 30);
    $turma->adicionaAluno($aluno3);

    $turma->listarAlunos();
?>