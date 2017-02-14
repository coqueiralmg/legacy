<?php

$app->get("/prefeitos", function() use($twig){

	// objeto PrefeitoDAO
	$prefeitoDAO = new \app\models\PrefeitoDAO();
	$prefeitos = $prefeitoDAO->listar();

	$dados = array(
		"title" => "Prefeitos | ",
		"prefeitos" => $prefeitos,
	);

	$twig->loadTemplate("prefeitos.html")->display($dados);

});

$app->get("/fale-com-prefeito/:nome/:id", function($nome, $id) use($twig){

	// objeto PrefeitoDAO
	$prefeitoDAO = new \app\models\PrefeitoDAO();
	$prefeito = $prefeitoDAO->buscarPeloId($id);
	$prefeitos = $prefeitoDAO->listar();

	$dados = array(
		"title" => "Fale com o prefeito | ",
		"prefeitos" => $prefeitos,
		"prefeito" => $prefeito
	);

	$twig->loadTemplate("fale-prefeito.html")->display($dados);

});