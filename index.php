<?php
function limpiar_dato($dato_a_limpiar)
{
    $dato_limpio = strtolower(str_replace(' ', '', $dato_a_limpiar));
    return $dato_limpio;
}

function invertir_dato_con_for($dato_original)
{
    $dato_invertido = "";
    for ($i = strlen($dato_original) - 1; $i >= 0; $i--) {
        $dato_invertido .= $dato_original[$i];
    }
    return $dato_invertido;
}

function invertir_dato_con_arreglo($dato_original)
{
    $dato_en_arreglo = explode(' ', $dato_original);
    $dato_invertido = "";
    for ($i = count($dato_en_arreglo) - 1; $i >= 0; $i--) {
        $dato_invertido .= strrev($dato_en_arreglo[$i]);
    }
    return $dato_invertido;
}

function saber_si_es_palindromo($dato_original, $dato_invertido)
{
    $respuesta = ($dato_original === $dato_invertido)
        ? "Limpio: " . $dato_original . " === Inversa: " . $dato_invertido . "\n--> Es palíndromo."
        : "Limpio: " . $dato_original . " === Inversa: " . $dato_invertido . "\n--> No es palíndromo.";
    return $respuesta;
}

/* ========================================
Declarar dato numérico o en texto.
======================================== */

$dato = "Esto es una palabra";
$dato_limpio = limpiar_dato($dato);

echo "### Original: " . $dato . " ###";

/* ========================================
Con función strrev().
======================================== */

echo "\n\n*** Con función strrev().\n";
echo saber_si_es_palindromo($dato_limpio, strrev($dato_limpio));

/* ========================================
Con ciclo for.
======================================== */

echo "\n\n*** Con ciclo for.\n";
$dato_invertido_con_for = invertir_dato_con_for($dato_limpio);
echo saber_si_es_palindromo($dato_limpio, $dato_invertido_con_for);

/* ========================================
Con arreglos.
======================================== */

echo "\n\n*** Con arreglos.\n";
$dato_invertido_con_arreglo = invertir_dato_con_arreglo($dato_limpio);
echo saber_si_es_palindromo($dato_limpio, $dato_invertido_con_arreglo);
