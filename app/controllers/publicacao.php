<?php

$app->get("/publicacoes(/page/:page(/limit/:limit(/search/:search)))", function($page=null, $limit=null, $search=null) use($twig){

	// pega pagina atual correta e limite
	$pagina = ($page != null) ? $page : 1;
	$limite = ($limit != null) ? $limit : 10;

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto legislacaoDAO
	$publicacaoDAO = new \app\models\PublicacaoDAO();

	// parametros de pesquisa
	$metodo = ($search == null) ? "listar" : "pesquisar";

	// objeto pagination
	$pagination = new \app\models\Pagination($publicacaoDAO, $limite, $pagina, $metodo, $somenteAtivos=true, $search);
	$pagination->setUrl("/publicacoes");

	// total objetos pesquisa
	if($search != null){
		$pagination->setTotalObjects(count($publicacaoDAO->pesquisar($search)))->updateLastPage();
	}

	// listar legislacoes
	$publicacoes = $pagination->getObjects();

	$dados = array(
		"title" => "Publicações | ",
		"secretarias" => $secretarias,
		"publicacoes" => $publicacoes,
		"pagination" => $pagination
	);

	$twig->loadTemplate("publicacoes.html")->display($dados);

});

$app->get("/publicacao/:slug/:id", function($slug, $id) use($twig){

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto publicacaoDAO
	$publicacaoDAO = new \app\models\PublicacaoDAO();
	$publicacao = $publicacaoDAO->buscarPeloId($id);

	$dados = array(
		"title" => "{$publicacao->getTitulo()} | ",
		"secretarias" => $secretarias,
		"publicacao" => $publicacao
	);

	$twig->loadTemplate("publicacao.html")->display($dados);

});