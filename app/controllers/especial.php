<?php

$app->get("/especial/pesquisa_habitacional", function() use($twig){
    $dados = array(
		"title" => "Pesquisa Habitacional | ",
	);

	$twig->loadTemplate("pesquisa_habitacional.html")->display($dados);
});