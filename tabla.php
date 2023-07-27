<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        table, th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        input[type="number"] {
            padding: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h2>Generador de Tabla de Multiplicar</h2>
    <form method="post" action="">
        <p>Se generará una tabla del 1 al 10</p>
        <label for="numero">Ingresa un número:</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Generar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Tabla de multiplicar del $numero:</h3>";
        echo "<table>";
        echo "<tr><th>Multiplicando</th><th>Resultado</th></tr>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
