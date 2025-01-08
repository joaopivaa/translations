<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translations 🌎</title>
    <link rel="stylesheet" href="lib/css/letra.css">
    <link rel="stylesheet" href="lib/css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

            // Função para limitar a exibição de palavras do array
            $grupos = array_chunk($words, 80);

            // Desconectar o banco
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
                            <li>
                                <p class="word-item" 
                                    data-palavra = "
                                        <?php echo htmlspecialchars($word['palavra']); ?>
                                    " 
                                    data-traducao = "
                                        <?php echo htmlspecialchars($word['traducao']); ?>
                                    ">
                                    <?php 
                                        echo htmlspecialchars($word['palavra']); 
                                    ?> 
                                    <span> → 
                                        <?php 
                                            echo htmlspecialchars($word['traducao']); 
                                        ?>
                                    </span>
                                </p>
                            </li>
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

    <!-- Modal -->
    <div id="word-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>
                    <span id="modal-palavra"> </span> 
                    →
                    <span id="modal-traducao"></span>
                <h2>
                <svg class="close" id="close-modal" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.459042 0.459042C0.604185 0.313532 0.776609 0.198085 0.966437 0.119315C1.15627 0.0405449 1.35977 0 1.56529 0C1.77082 0 1.97432 0.0405449 2.16415 0.119315C2.35398 0.198085 2.5264 0.313532 2.67154 0.459042L10.9403 8.73092L19.209 0.459042C19.3543 0.313767 19.5268 0.198529 19.7166 0.119907C19.9064 0.0412845 20.1098 0.000818074 20.3153 0.000818074C20.5207 0.000818074 20.7242 0.0412845 20.914 0.119907C21.1038 0.198529 21.2763 0.313767 21.4215 0.459042C21.5668 0.604317 21.6821 0.776783 21.7607 0.966594C21.8393 1.1564 21.8798 1.35984 21.8798 1.56529C21.8798 1.77074 21.8393 1.97418 21.7607 2.16399C21.6821 2.3538 21.5668 2.52627 21.4215 2.67154L13.1497 10.9403L21.4215 19.209C21.5668 19.3543 21.6821 19.5268 21.7607 19.7166C21.8393 19.9064 21.8798 20.1098 21.8798 20.3153C21.8798 20.5207 21.8393 20.7242 21.7607 20.914C21.6821 21.1038 21.5668 21.2763 21.4215 21.4215C21.2763 21.5668 21.1038 21.6821 20.914 21.7607C20.7242 21.8393 20.5207 21.8798 20.3153 21.8798C20.1098 21.8798 19.9064 21.8393 19.7166 21.7607C19.5268 21.6821 19.3543 21.5668 19.209 21.4215L10.9403 13.1497L2.67154 21.4215C2.52627 21.5668 2.3538 21.6821 2.16399 21.7607C1.97418 21.8393 1.77074 21.8798 1.56529 21.8798C1.35984 21.8798 1.1564 21.8393 0.966594 21.7607C0.776783 21.6821 0.604317 21.5668 0.459042 21.4215C0.313767 21.2763 0.198529 21.1038 0.119907 20.914C0.0412845 20.7242 0.000818074 20.5207 0.000818074 20.3153C0.000818074 20.1098 0.0412845 19.9064 0.119907 19.7166C0.198529 19.5268 0.313767 19.3543 0.459042 19.209L8.73092 10.9403L0.459042 2.67154C0.313532 2.5264 0.198085 2.35398 0.119315 2.16415C0.0405449 1.97432 0 1.77082 0 1.56529C0 1.35977 0.0405449 1.15627 0.119315 0.966437C0.198085 0.776609 0.313532 0.604185 0.459042 0.459042Z" fill='#fff'/>
                </svg>
            </div>
            <div class="modal-body">
                <p>Detalhes adicionais aqui.</p>
            </div>
            <div class="modal-footer">
                <a href="word_alterar.php" class="btn btn-modify">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.6 9.6 0 0 0 7.556 8a9.6 9.6 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.6 10.6 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.6 9.6 0 0 0 6.444 8a9.6 9.6 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5"/>
                    <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192"/>
                </svg>
                </a>
                <a class="btn btn-delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <script src="lib/js/collapse.js"></script>
    <script src="lib/js/modal.js"></script>
</body>
</html>