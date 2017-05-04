<?php

$app->get("/100dias", function() use($twig){

});

/*
$app->get("/especial/pesquisa_habitacional", function() use($twig){
    
    // objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(14, 0);
    
    $dados = array(
		"title" => "Pesquisa de Demanda Habitacional | ",
        "secretarias" => $secretarias
	);

	$twig->loadTemplate("pesquisa_habitacional.html")->display($dados);
});
*/