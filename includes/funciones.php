<?php

function debuguear($variable) : string {
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function esUltimo(string $actual, string $proximo): bool {
     if($actual !== $proximo) {
        return true;
    }
    return false;
}

// Función que revisa si el usuario esta autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('location: /');
    }
}
// Evita crear múltiples archivos temporales de sesión *
function isSession() : void {
    if(!isset($_SESSION)) {
        session_start();
    }
}
function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header('location: /');
    }
}
