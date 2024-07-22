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
            <form method="POST" action="core/word_repositorio.php">
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
                    <select name="letras" id="letra" required>
                        <option 
                            value="">
                                A
                        </option>
                        <option 
                            value="">
                                B
                        </option>
                        <option 
                            value="">
                                C
                        </option>
                        <option 
                            value="">
                                D
                        </option>
                        <option 
                            value="">
                                E
                        </option>
                        <option 
                            value="">
                                F
                        </option>
                        <option 
                            value="">
                                G
                        </option>
                        <option 
                            value="">
                                H
                        </option>
                        <option 
                            value="">
                                I
                        </option>
                        <option 
                            value="">
                                J
                        </option>
                        <option 
                            value="">
                                K
                        </option>
                        <option 
                            value="">
                                L
                        </option>
                        <option 
                            value="">
                                M
                        </option>
                        <option 
                            value="">
                                N
                        </option>
                        <option 
                            value="">
                                O
                        </option>
                        <option 
                            value="">
                                P
                        </option>
                        <option 
                            value="">
                                Q
                        </option>
                        <option 
                            value="">
                                R
                        </option>
                        <option 
                            value="">
                                S
                        </option>
                        <option 
                            value="">
                                T
                        </option>
                        <option 
                            value="">
                                U
                        </option>
                        <option 
                            value="">
                                V
                        </option>
                        <option 
                            value="">
                                W
                        </option>
                        <option 
                            value="">
                                X
                        </option>
                        <option 
                            value="">
                                Y
                        </option>
                        <option 
                            value="">
                                Z
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
    </div>
</body>

</html>