<?php

$app->get("/secretarias", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar();

	$dados = array(
		"title" => "Secretarias | ",
		"secretarias" => $secretarias,
	);

	$twig->loadTemplate("secretarias.html")->display($dados);

});

$app->get("/fale-com-secretaria/:nome/:id", function($nome, $id) use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretaria = $secretariaDAO->buscarPeloId($id);
	$secretarias = $secretariaDAO->listar();

	$dados = array(
		"title" => "Fale com a secretaria | ",
		"secretarias" => $secretarias,
		"secretaria" => $secretaria
	);

	$twig->loadTemplate("fale-secretaria.html")->display($dados);

});