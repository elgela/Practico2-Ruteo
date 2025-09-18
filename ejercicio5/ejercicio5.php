<!--Una persona desea invertir dinero en un banco, el cual le otorga un % de interés mensual. Escribir un programa para simular la inversión que imprima cuál será la cantidad de dinero que esta persona tendrá mes a mes durante un año. Genere una tabla HTML para mostrar el resultado.-->


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ejercicio 5</title>
</head>

<body>
    <h2>Ejercicio 6 práctico1</h2>
    <p>Una persona desea invertir dinero en un banco, el cual le otorga un % de interés mensual. Escribir un programa para simular la inversión que imprima cuál será la cantidad de dinero que esta persona tendrá mes a mes durante un año. Genere una tabla HTML para mostrar el resultado.</p>
    <h3>TNA: 75%</h3>
    <h3>Plazo: 30 días</h3>
    <form method="POST">
        <label for="capital">¿Cuanto querés invertir?</label><br>
        <input type="number" name="capital" id="capital">
        <br><br>
        <button type="submit">Simular</button>
    </form>
    <br>

    <?php
        if ($_SERVER["REQUEST_METHOD"] =="POST" && !empty($_POST['capital'])) {
            $capitalInicial = floatval($_POST['capital']);
            $interesMensual = 0.75;
            $meses = 12;
            $capital = $capitalInicial;

            echo "<table>
                    <thead>
                        <tr>
                            <th>Mes</th>
                            <th>Capital acumulado</th>
                        </tr>
                    </thead>
                    <tbody>";
            for ($mes=1; $mes <= $meses ; $mes++) {
                $capital *= (1 + $interesMensual);
                echo "<tr><td style='text-align:center'>$mes</td><td style='text-align:center'>" . number_format($capital, 2, ',', '.') . "</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Debes introducir un valor";
        }
    ?>

</body>

</html>