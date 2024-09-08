<?php

    session_start();
    require_once '../includes/funcoes.php';
    require_once 'conexao_mysql.php' ;
    require_once 'sql.php' ;
    require_once 'mysql.php' ;

    foreach($_POST as $indice => $dado) {
        $$indice = limparDados($dado);
    }

    foreach($_GET as $indice => $dado) {
        $$indice = limparDados($dado);
    }

    $id = (int)$id ;

    switch ($acao) {
        case 'insert':

            $dados = [
                'palavra'           => $palavra,
                'traducao'          => $traducao,
                'letra'             => $letra
            ];

            insere('word', $dados);
            break;

        case 'update':
            
            $dados = [
                'palavra'           => $palavra,
                'traducao'          => $traducao,
                'letra'             => $letra
            ];

            $criterio = [
                ['id', '=', $id]
            ];

            atualiza('word', $dados, $criterio);
            break;

        case 'delete':
            
            $criterio = [
                ['id', '=', $id]
            ];

            deleta('word', $criterio);
            break;
    }

    header('Location: ../word_formulario.php');
?>