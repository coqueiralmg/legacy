<?php

$app->get("/publicacoes(/page/:page(/limit/:limit(/search/:search)))", function($page=null, $limit=null, $search=null) use($twig){

	// pega pagina atual correta e limite
	$pagina = ($page != null) ? $page : 1;
	$limite = ($limit != null) ? $limit : 10;

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto legislacaoDAO
	$legislacaoDAO = new \app\models\LegislacaoDAO();

	// parametros de pesquisa
	$metodo = ($search == null) ? "listar" : "pesquisar";

	// objeto pagination
	$pagination = new \app\models\Pagination($legislacaoDAO, $limite, $pagina, $metodo, $somenteAtivos=true, $search);
	$pagination->setUrl("/legislacao");

	// total objetos pesquisa
	if($search != null){
		$pagination->setTotalObjects(count($legislacaoDAO->pesquisar($search)))->updateLastPage();
	}

	// listar legislacoes
	$legislacoes = $pagination->getObjects();

	$dados = array(
		"title" => "Legislações | ",
		"secretarias" => $secretarias,
		"legislacoes" => $legislacoes,
		"pagination" => $pagination
	);

	$twig->loadTemplate("legislacoes.html")->display($dados);

});

$app->get("/publicacao/:slug/:id", function($slug, $id) use($twig){

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto legislacaoDAO
	$legislacaoDAO = new \app\models\LegislacaoDAO();
	$legislacao = $legislacaoDAO->buscarPeloId($id);

	$dados = array(
		"title" => "{$legislacao->getTitulo()} | ",
		"secretarias" => $secretarias,
		"legislacao" => $legislacao
	);

	$twig->loadTemplate("legislacao.html")->display($dados);

});