<?php

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    require 'form.html';
} else {
    $logininfo = [
        'frodo' => 'bolson',
        'guille' => 'torres',
        'admin' => '1234'
    ];

    if (!array_key_exists($_POST['username'], $logininfo) || $logininfo[$_POST['username']] !== $_POST['password']) {
        echo "Credenciales incorrectas. <a href=\"/15 - FormularioUnaPagina/index.php\">Inténtalo de nuevo</a>.";
        exit;
    }

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    include_once 'hola.php';
}

