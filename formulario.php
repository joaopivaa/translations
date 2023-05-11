<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="teste.php">

            <div class="box">

                <h3>Adicionar nova palavra</h3>
            
                <div>

                    <label for="palavra">Palavra </label><br>
                    <input type="text" name="palavra" id="palavra" placeholder="Digite a palavra" size="20" required>

                </div>
                
                <div>

                    <label for="traducao">Tradução </label><br>
                    <input type="traducao" name="traducao" id="traducao" placeholder="Digite sua tradução" size="20" required>

                </div>

                <div>

                    <label for="">Aonde você deseja adicionar?</label><br>
                    
                    <input type="radio" name="gaveta" id="a">
                    <label>A</label>
                    
                    <input type="radio" name="gaveta" id="b">
                    <label>B</label>
                    
                    <input type="radio" name="gaveta" id="c">
                    <label>C</label>

                </div>

            </div>

        </form>
    </div>
</body>
</html>