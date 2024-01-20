<?php

    require_once 'conexao_mysql.php' ;

    $palavra = $_POST["palavra"] ;

    $traducao = $_POST["traducao"] ;

    $Letra = $_POST["letra"] ;

    $sql = "INSERT INTO 
    
    word (palavra, traducao, letra) VALUES
    
    ('$palavra', '$traducao', '$letra')" ;

?>