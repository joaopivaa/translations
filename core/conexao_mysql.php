<?php

        $server = 'localhost' ;

        $banco = 'translations' ;

        $port = 3307 ;

        $usuario = 'root' ;

        $senha = '' ;

        $conexao = new mysqli($server, $usuario, $senha, $banco, $port) ;

        if (!$conexao) 
        {
            echo "Erro: Não foi possível conectar ao Mysql. " . PHP_EOL ;

            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL ;

            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL ;

            return null ;
        }
?>