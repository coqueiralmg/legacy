<?php

//echo dirname(__FILE__) . '/../le_php-master/logentries.php';

if($_SERVER["SERVER_NAME"] == "coqueiral.mg.gov.br" || $_SERVER["SERVER_NAME"] == "www.coqueiral.mg.gov.br") {

    require_once ROOT . 'vendor/le_php-master/logentries.php';
    
    $ip = $_SERVER["REMOTE_ADDR"];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $path = $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'];

    $data = [
        "ip" => $ip,
        "agent" => $agent,
        "path" => $path
    ];

    $log->Info(json_encode($data));
    
}