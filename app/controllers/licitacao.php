<?php

$app->get("/publicacoes(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($twig){

	// pega pagina atual correta e limite
	$pagina = ($page != null) ? $page : 1;
	$limite = ($limit != null) ? $limit : 10;

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto licitacaoDAO
	$licitacaoDAO = new \app\models\LicitacaoDAO();

	// objeto pagination
	$pagination = new \app\models\Pagination($licitacaoDAO, $limite, $pagina, $metodo="listar", $somenteAtivos=true);
	$pagination->setUrl("/publicacoes");

	// listar licitacoes
	$licitacoes = $pagination->getObjects();

	$dados = array(
		"title" => "Publicações | ",
		"secretarias" => $secretarias,
		"licitacoes" => $licitacoes,
		"pagination" => $pagination
	);

	$twig->loadTemplate("licitacoes.html")->display($dados);

});

$app->get("/licitacao/:slug/:id", function($slug, $id) use($twig){

	// objeto SecretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto licitacaoDAO
	$licitacaoDAO = new \app\models\LicitacaoDAO();
	$licitacao = $licitacaoDAO->buscarPeloId($id);

	$dados = array(
		"title" => "{$licitacao->getTitulo()} | ",
		"secretarias" => $secretarias,
		"licitacao" => $licitacao
	);

	$twig->loadTemplate("licitacao.html")->display($dados);

});