<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/formulario.css">
    <title>Translations</title>
</head>
<body>
    <div class="form">
    <?php 
                    
        require_once 'includes/funcoes.php' ;
        require_once 'core/conexao_mysql.php' ;
        require_once 'core/sql.php' ;
        require_once 'core/mysql.php' ;

        foreach($_GET as $indice => $dado){
            $$indice = limparDados($dado);
        }

        foreach($_POST as $indice => $dado){
            $$indice = limparDados($dado);
        }

        $word = buscar(
            'word',
            ['*'],
            [ ['id', '=', $words] ]
        );

        $words = $word[0];
    ?>
        <form method="POST" action="core/word_repositorio.php">
        
        <input type="hidden" name="acao"
                value="<?php echo empty($id) ? 'insert' : 'update' ?>">
        
        <input type="hidden" name="id"
            value="<?php echo $words['id'] ?? '' ?>">
            
            <a href="index.php"><p>Translations</p></a>
            <div class="inputBox">
                <input 
                    type="text" 
                    id="palavra" 
                    name="palavra" 
                    value="<?php echo $words['palavra'] ?? '' ?>" 
                    required
                >
                <label for="palavra">Palavra</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input 
                    type="text" 
                    id="traducao" 
                    name="traducao" 
                    value="<?php echo $words['traducao'] ?? '' ?>" 
                    required
                >
                <label for="traducao">Tradução</label>
                <i></i>
            </div>
            <div class="inputBox">
                <select name="letra" id="letra" required>
                    <?php 
                        $letras = range('A', 'Z');
                        array_push($letras, 'CC');
                        foreach ($letras as $letra) {
                            $selected = ($words['letra'] ?? '') === $letra ? 'selected' : '';
                            echo "<option value=\"$letra\" $selected>$letra</option>";
                        }
                    ?>
                </select>
                <i></i>
            </div>
            <br>
            <div class="container-btn">
                <input 
                    type="submit" 
                    value="Alterar"
                >
            </div>
        </form>
    </div>
</body>
</html>