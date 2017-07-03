<?php
session_start();

ini_set("display_errors", 1);
ini_set("file_uploads", 1);

date_default_timezone_set ('America/Sao_Paulo');
//define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/kit-lotofacil/");
define("ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");

require ROOT . "vendor/autoload.php";
require ROOT . "config.slim.twig.php";
require ROOT . "public/functions/functions.php";