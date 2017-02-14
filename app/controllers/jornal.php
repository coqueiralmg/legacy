<?php

$app->get("/jornal", function() use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar();

	$dados = array(
		"title" => "Jornal Nosso Município | ",
		"secretarias" => $secretarias,
	);

	$twig->loadTemplate("jornal.html")->display($dados);

});