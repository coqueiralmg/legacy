<?php
/*
REDIRECIONAMENTO DE SITES ATRAVÉS DE AGENTS INVÁLIDOS
*/

$invalid_agent = [
    "",
];

if(in_array($_SERVER['HTTP_USER_AGENT'], $invalid_agent)){
    header("Location: http://127.0.0.1");
    die();
}