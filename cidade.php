<?php

$app->get("/cidade/historico", function() use($twig){
    
    // objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(14, 0);
    
    $dados = array(
		"title" => "História de Coqueiral | ",
        "secretarias" => $secretarias
	);

	$twig->loadTemplate("historico.html")->display($dados);
});