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
                <select name="letra" id="letra" required>
                    <option value="1">Qual a letra?</option>
                    <option value="2">A</option>
                    <option value="3">B</option>
                    <option value="4">C</option>
                    <option value="5">D</option>
                    <option value="6">E</option>
                    <option value="7">F</option>
                    <option value="8">G</option>
                    <option value="9">H</option>
                    <option value="10">I</option>
                    <option value="11">J</option>
                    <option value="12">K</option>
                    <option value="13">L</option>
                    <option value="14">M</option>
                    <option value="15">N</option>
                    <option value="16">O</option>
                    <option value="17">P</option>
                    <option value="18">Q</option>
                    <option value="19">R</option>
                    <option value="20">S</option>
                    <option value="21">T</option>
                    <option value="22">U</option>
                    <option value="23">V</option>
                    <option value="24">W</option>
                    <option value="25">X</option>
                    <option value="26">Y</option>
                    <option value="27">Z</option>
                    <option value="28">CC</option>
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