<?php

$siteUrl = new \Twig_SimpleFunction("siteUrl", function(){
	return "http://" . $_SERVER["SERVER_NAME"];
});
$twig->addFunction($siteUrl);

$gerarSlug = new \Twig_SimpleFunction("gerarSlug", function($texto){
	$procurar      = array(' ', 'ã', 'à', 'á', 'â', 'é', 'ê', 'í', 'ì', 'ó', 'ò', 'õ', 'ô', 'ú', 'ù', 'û', 'ç', ',', '.', '!', '?', ';', '/');
    $substituir     = array('-', 'a', 'a', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'c', '', '', '', '', '', '-');
    return strtolower(str_replace($procurar, $substituir, $texto));
});
$twig->addFunction($gerarSlug);

$cortarTexto = new \Twig_SimpleFunction("cortarTexto", function($texto, $qtdCaracteres, $points=false, $stripTags=false){
    $texto = ($stripTags) ? strip_tags($texto) : $texto;
    $reticences = "";
	if (strlen($texto) > $qtdCaracteres){
        $reticences = "...";
        $limite = substr($texto, 0, $qtdCaracteres);
        $posicaoString = strrpos($limite, " ");
        $cortaTexto = ($posicaoString > 0) ? $posicaoString : strlen($limite);
        $texto = substr($limite, 0, $cortaTexto);
    }
    return ($points) ?  $texto . $reticences : $texto;
});
$twig->addFunction($cortarTexto);

$videoEmbedYoutube = new \Twig_SimpleFunction("videoEmbedYoutube", function($url){
    return str_replace("https://www.youtube.com/watch?v=", "", $url);
});
$twig->addFunction($videoEmbedYoutube);

$instanceOf = new \Twig_SimpleFunction("instanceOf", function($object, $class){
    return ($object instanceof $class);
});
$twig->addFunction($instanceOf);

$formataData = new \Twig_SimpleFunction("formataData", function($data){
    return date('d/m/Y', strtotime($data));
});

$twig->addFunction($formataData);

function siteUrl(){
	return "http://" . $_SERVER["SERVER_NAME"];
}