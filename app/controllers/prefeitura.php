<?php

$app->get("/prefeitura", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	$dados = array(
		"title" => "A Prefeitura | ",
		"secretarias" => $secretarias
	);

	$twig->loadTemplate("prefeitura.html")->display($dados);

});

$app->get("/fale-conosco", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	$dados = array(
		"title" => "Fale Conosco | ",
		"secretarias" => $secretarias
	);

	$twig->loadTemplate("fale-prefeitura.html")->display($dados);

});

$app->get("/fale-sucesso", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	$dados = array(
		"title" => "Sucesso | ",
		"secretarias" => $secretarias
	);

	$twig->loadTemplate("fale-sucesso.html")->display($dados);

});

$app->get("/prefeito", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	$dados = array(
		"title" => "Prefeito | ",
		"secretarias" => $secretarias
	);

	$twig->loadTemplate("prefeito.html")->display($dados);

});

$app->get("/vice-prefeito", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	$dados = array(
		"title" => "Vice-Prefeito | ",
		"secretarias" => $secretarias
	);

	$twig->loadTemplate("vice-prefeito.html")->display($dados);

});