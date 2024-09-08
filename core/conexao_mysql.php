<?php
    function conecta () : mysqli {
        $server = 'localhost' ;
        $banco = 'translations' ;
        $port = 3307 ;
        $usuario = 'root' ;
        $senha = '' ;
        $conexao = mysqli_connect($server, $usuario, $senha, $banco, $port) ;

        if (!$conexao)  {
            echo "Erro: Não foi possível conectar ao Mysql. " . PHP_EOL ;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL ;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL ;
            
            return null ;
        }

        return $conexao ;
    }
    function desconecta ($conexao){
        mysqli_close($conexao) ;
    }
?>