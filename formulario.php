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

    <div class="box">

        <div class="form">

            <form action="teste.php" method="POST" action="core/word_repositorio.php">

                <h2>Translations</h2>

                <div class="inputBox">
                    <input 
                        type="text" 
                        id="palavra" 
                        name="palavra" 
                        value="" 
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
                        value="" 
                        required
                    >
                    <label for="traducao">Tradução</label>
                    <i></i>
                </div>
                <div class="inputBox">
                    <select name="Letra" value="Letra" required>
                        <option>Qual a letra?</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                        <option>E</option>
                        <option>F</option>
                        <option>G</option>
                        <option>H</option>
                        <option>I</option>
                        <option>J</option>
                        <option>K</option>
                        <option>L</option>
                        <option>M</option>
                        <option>N</option>
                        <option>O</option>
                        <option>P</option>
                        <option>Q</option>
                        <option>R</option>
                        <option>S</option>
                        <option>T</option>
                        <option>U</option>
                        <option>V</option>
                        <option>W</option>
                        <option>X</option>
                        <option>Y</option>
                        <option>Z</option>
                        <option>CC</option>
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
    </div>
</body>

</html>