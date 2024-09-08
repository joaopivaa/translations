<!DOCTYPE html>
<html lang="en">
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

        if(!empty($id)){
            $id = (int)$id;

            $criterio = [
                ['id', '=', $id]
            ];

            $retorno = buscar(
                'word',
                ['*'],
                $criterio
            );

            $entidade = $retorno[0];
        }
    ?>
        <form method="POST" action="core/word_repositorio.php">
        
        <input type="hidden" name="acao"
                value="<?php echo empty($id) ? 'insert' : 'update' ?>">
        
        <input type="hidden" name="id"
            value="<?php echo $entidade['id'] ?? '' ?>">
            
            <a href="index.php"><p>Translations</p></a>
            <div class="inputBox">
                <input 
                    type="text" 
                    id="palavra" 
                    name="palavra" 
                    value="<?php echo $entidade['palavra'] ?? '' ?>" 
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
                    value="<?php echo $entidade['traducao'] ?? '' ?>" 
                    required
                >
                <label for="traducao">Tradução</label>
                <i></i>
            </div>
            <div class="inputBox">
                <select name="letra" id="letra" required>
                    <option 
                        value="A">
                            A
                    </option>
                    <option 
                        value="B">
                            B
                    </option>
                    <option 
                        value="C">
                            C
                    </option>
                    <option 
                        value="D">
                            D
                    </option>
                    <option 
                        value="E">
                            E
                    </option>
                    <option 
                        value="F">
                            F
                    </option>
                    <option 
                        value="G">
                            G
                    </option>
                    <option 
                        value="H">
                            H
                    </option>
                    <option 
                        value="I">
                            I
                    </option>
                    <option 
                        value="J">
                            J
                    </option>
                    <option 
                        value="K">
                            K
                    </option>
                    <option 
                        value="L">
                            L
                    </option>
                    <option 
                        value="M">
                            M
                    </option>
                    <option 
                        value="N">
                            N
                    </option>
                    <option 
                        value="O">
                            O
                    </option>
                    <option 
                        value="P">
                            P
                    </option>
                    <option 
                        value="Q">
                            Q
                    </option>
                    <option 
                        value="R">
                            R
                    </option>
                    <option 
                        value="S">
                            S
                    </option>
                    <option 
                        value="T">
                            T
                    </option>
                    <option 
                        value="U">
                            U
                    </option>
                    <option 
                        value="V">
                            V
                    </option>
                    <option 
                        value="W">
                            W
                    </option>
                    <option 
                        value="X">
                            X
                    </option>
                    <option 
                        value="Y">
                            Y
                    </option>
                    <option 
                        value="Z">
                            Z
                    </option>
                    <option 
                        value="CC">
                            CC
                    </option>
                </select>
                <i></i>
            </div>
            <br>
            <div class="container-btn">
                <input 
                    type="submit" 
                    value="Adicionar"
                >
            </div>
        </form>
    </div>
</body>
</html>