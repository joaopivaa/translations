<?php

    if ($_GET["Letra"] == "A") 
    { 
        $Palavra = $_GET["palavra"] ;

        $Traducao = $_GET["traducao"] ;

        $Variavel = '<li><p style="color: #9566dc;">' . $Palavra . ' <span style="color: #696868;"> → ' . $Traducao . '</span></p></li>' ;
        
        $i = 0 ;

        $Letra_A = array(500);

        $Array_A_Size = count($Letra_A) ;

        for ($i = 0; $i < $Array_A_Size ; $i++) 
        { 
            $Letra_A[$i] = $Variavel ;

            $i++;  
            
            echo "<ul>" ;
            print_r ($Letra_A);
            echo "</ul>" ;
        }

    }

    echo '<a href="formulario.html">Voltar</a>' ;

?>