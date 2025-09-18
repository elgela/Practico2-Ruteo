<?php
    function multiplicar($a, $b) {
        return $a * $b;
    }

    function showOperacion($numero1, $numero2, $op) {
        if (isset($numero1) && isset($numero2) && isset($op)) {
            switch ($op) {
                case 'multiplicar':
                    $resultado = multiplicar($numero1, $numero2);
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }