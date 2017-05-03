<?php

// configurações do TWIG (Engine Template)
$loader = new \Twig_Loader_Filesystem(ROOT . "app/views");
$loader->addPath(ROOT . "app/views/admin");
$twig = new \Twig_Environment($loader, array(
	"debug" => true,
	"cache" => ROOT . "cache"
));



// configurações do Slim Framework
$app = new \Slim\Slim(array(
	"debug" => false,
	"mode" => "development"
));

// erros personalizados
// not found
$app->notFound(function() use($app, $twig){

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(14, 0);

	$dados = array(
		"titulo" => "Erro 404 | Página não encontrada",
		"secretarias" => $secretarias
	);
	$template = (is_numeric(strpos($_SERVER["REQUEST_URI"], "/admin"))) ? "admin/404.html" : "404.html";
	$twig->loadTemplate($template)->display($dados);
});

// erros gerais
// para funcionar, o debug deve estar setado como false
$app->error(function(\Exception $e) use($app, $twig){
	
	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(14, 0);
	
	$dados = array(
		"titulo" => "Erro inesperado",
		"secretarias" => $secretarias,
		"message" => $e->getMessage(),
		"file" => $e->getFile(),
		"line" => $e->getLine()
	);
	$template = (is_numeric(strpos($_SERVER["REQUEST_URI"], "/admin"))) ? "admin/error.html" : "error.html";
	$twig->loadTemplate($template)->display($dados);
});