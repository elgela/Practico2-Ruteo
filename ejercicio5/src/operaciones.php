<?php

// function showOperacion($numero1, $numero2, $op) {
//     if (isset($numero1) && isset($numero2) && isset($op)) {
//         switch ($op) {
//             case 'multiplicar':
//                 $resultado = multiplicar($numero1, $numero2);
//                 break;

//                 default:
//                 $resultado = 'Error';
//                 break;
//             }
//             echo '<span>' . $resultado . '</span>';
//         }
//     }

function showHome() {
    require_once 'templates/header.php';
}

function multiplicar() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['capital'])) {
        $capitalInicial = floatval($_POST['capital']);
        $interesMensual = 0.75;
        $meses = 12;
        $capital = $capitalInicial;

        echo "<table>
                <thead>
                    <tr>
                        <th>Mes</th>
                        <th>Capital</th>
                    </tr>
                </thead>
            <tbody>";
        for ($mes = 1; $mes <= $meses; $mes++) {
            $capital *= (1 + $interesMensual);
            echo "<tr><td style='text-align:center'>$mes</td><td style='text-align:center'>" . number_format($capital, 2, ',', '.') . "</td></tr>";       
        }
        echo "</tbody></table>";
        require_once 'templates/footer.php';
    }
}

