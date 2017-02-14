<?php

$app->get("/videos(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($twig){

	// pega pagina atual correta e limite
	$pagina = ($page != null) ? $page : 1;
	$limite = ($limit != null) ? $limit : 10;

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto videoDAO
	$videoDAO = new \app\models\VideoDAO();

	// objeto pagination
	$pagination = new \app\models\Pagination($videoDAO, $limite, $pagina, $metodo="listar", $somenteAtivos=true);
	$pagination->setUrl("/videos");

	// listar videos
	$videos = $pagination->getObjects();

	$dados = array(
		"title" => "Vídeos | ",
		"secretarias" => $secretarias,
		"videos" => $videos,
		"pagination" => $pagination
	);

	$twig->loadTemplate("videos.html")->display($dados);

});

$app->get("/video/:slug/:id", function($slug, $id) use($twig){

	// objeto secretariaDAO
	$secretariaDAO = new \app\models\SecretariaDAO();
	$secretarias = $secretariaDAO->listar(15, 0);

	// objeto videoDAO
	$videoDAO = new \app\models\VideoDAO();
	$video = $videoDAO->buscarPeloId($id);
	$videos = $videoDAO->listarRandon(12, 0);

	// objeto postDAO
	$postDAO = new \app\models\PostDAO();
	$postDAO->incrementaVisualizacao($video->getPost()->getId()); // incrementa visualizacao

	$dados = array(
		"title" => "{$video->getPost()->getTitulo()} | ",
		"secretarias" => $secretarias,
		"video" => $video,
		"videos" => $videos
	);

	$twig->loadTemplate("video.html")->display($dados);

});