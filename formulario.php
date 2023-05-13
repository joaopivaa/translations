<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/formulario.css">

    <title>Translations</title>
</head>
<body>

   <div class="box">
      
    <div class="form">

        <form method="POST" action="teste.php">

            <h2>Translations</h2>

            <div class="inputBox">
                <input type="text" id="palavra" name="palavra" size="28" required>
                <label for="palavra">Palavra</label>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" id="traducao" name="traducao" size="28" required>
                <label for="traducao">Tradução</label>
                <i></i>
            </div>
            <div class="inputBox">
                <select name="letra" id="letra">
                    <option value="1">Qual a letra?</option>
                    <option value="2">A</option>
                    <option value="3">B</option>
                    <option value="4">C</option>
                    <option value="5">D</option>
                    <option value="6">Outro</option>
                </select>
                <i></i>
            </div>
            <br>
            <div class="container-btn">
                <input type="submit" value="Adicionar">
            </div>
        </form>
      </div>
    </div>
</body>
</html>