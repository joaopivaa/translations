<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translations 🌎</title>
    <link rel="stylesheet" href="lib/css/letra.css">
    </head>
<body>

    <div class="container">
        <?php
            require_once 'includes/funcoes.php' ;
            require_once 'core/conexao_mysql.php' ;
            require_once 'core/sql.php' ;
            require_once 'core/mysql.php' ;

            foreach ($_GET as $indice => $dado) {
                $$indice = limparDados($dado) ;
            }

            foreach($_POST as $indice => $dado) {
                $$indice = limparDados($dado);
            }

            $letra = isset($_GET['letra']) ? $_GET['letra'] : 'A';
            
            $conexao = conecta();

            $sql = "SELECT palavra, traducao FROM word WHERE palavra LIKE '$letra%' ORDER BY palavra ASC";
            $result = $conexao->query($sql);

            $words = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $words[] = $row;
                }
            }

            $grupos = array_chunk($words, 80);

            desconecta($conexao);
        ?>
        
        <div class="word">
            <?php
                echo "<p> <a href='index.php'>" . htmlspecialchars($letra) . "</a> </p>" ;
            ?>
        </div>
        <?php foreach ($grupos as $index => $grupo): ?>
            <div class="content" id="group-<?php echo $index + 1; ?>">
                <div class="list-word">
                    <ul>
                        <?php foreach ($grupo as $word): ?>
                            <li><?php echo "<p>". htmlspecialchars($word['palavra']) . " <span> → " . htmlspecialchars($word['traducao']) . "</span></p>"?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if(count($grupos) > 1): ?>
            <div class="group-buttons">
                <?php foreach ($grupos as $index => $grupo): ?>
                    <div class="radio" id="btn-<?php echo $index + 1; ?>">
                        <input type="radio" name="row" <?php echo $index === 0 ? 'checked' : ''; ?>>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="lib/js/collapse.js"></script>
</body>
</html>