<?php
    $texto = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma
    linguagem de script open source de uso geral, muito utilizada, e especialmente
    adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";

    //Maisculas.
    echo strtoupper($texto);

    //Minusculas.
    echo "<br><br>";
    echo strtolower($texto);

    //Primeira letra maiuscula.
    echo "<br><br>";
    echo ucfirst($texto);

    //Primeira letra de todas as palavras.
    echo "<br><br>";
    echo ucwords($texto);

?>