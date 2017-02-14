<?php

$app->get("/", function() use($twig){

	// objeto bannerDAO
	$bannerDAO = new \app\models\BannerDAO();
	$banners = $bannerDAO->listar();

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(14, 0);

	// objeto noticiaDAO
	$noticiaDAO = new \app\models\NoticiaDAO();
	$noticia = $noticiaDAO->listar(1, 0)[0];

	// destaques 
	/*$postDAO = new \app\models\PostDAO();
	$destaques = $postDAO->buscarDestaques(4, 0);*/
	$destaqueDAO = new \app\models\DestaqueDAO();
	$destaques = $destaqueDAO->listar(2, 0);

	$dados = array(
		"title" => "",
		"banners" => $banners,
		"secretarias" => $secretarias,
		"noticia" => $noticia,
		"destaques" => $destaques
	);

	$twig->loadTemplate("home.html")->display($dados);

});