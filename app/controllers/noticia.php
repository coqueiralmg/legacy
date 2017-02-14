<?php

$app->get("/noticias(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($twig){

	// pega pagina atual correta e limite
	$pagina = ($page != null) ? $page : 1;
	$limite = ($limit != null) ? $limit : 10;

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto noticiaDAO
	$noticiaDAO = new \app\models\NoticiaDAO();

	// objeto pagination
	$pagination = new \app\models\Pagination($noticiaDAO, $limite, $pagina, $metodo="listar", $somenteAtivos=true);
	$pagination->setUrl("/noticias");

	// listar noticias
	$noticias = $pagination->getObjects();

	$dados = array(
		"title" => "Notícias | ",
		"secretarias" => $secretarias,
		"noticias" => $noticias,
		"pagination" => $pagination
	);

	$twig->loadTemplate("noticias.html")->display($dados);

});

$app->get("/noticia/:slug/:id", function($slug, $id) use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto noticiaDAO
	$noticiaDAO = new \app\models\NoticiaDAO();
	$noticia = $noticiaDAO->buscarPeloId($id);

	// objeto postDAO
	$postDAO = new \app\models\PostDAO();
	$postDAO->incrementaVisualizacao($noticia->getPost()->getId()); // incrementa visualizacao

	$dados = array(
		"title" => "{$noticia->getPost()->getTitulo()} | ",
		"secretarias" => $secretarias,
		"noticia" => $noticia
	);

	$twig->loadTemplate("noticia.html")->display($dados);

});