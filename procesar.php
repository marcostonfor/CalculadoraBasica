<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expresion = $_POST['expresion'] ?? '';

    // Evaluar de forma segura
    $expresion = preg_replace('/[^0-9\+\-\*\/\.\(\)\(%)]/', '', $expresion);

    try {
        eval('$resultado = ' . $expresion . ';');
        echo $resultado;
    } catch (Throwable $e) {
        echo 'Error';
    }
}