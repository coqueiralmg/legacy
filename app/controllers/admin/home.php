<?php

$app->group("/admin/painel", function() use($app, $twig){

	$app->get("/", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);

		// último log
		$logDAO = new \app\models\LogDAO();
		$ultimoAcesso = $logDAO->buscarUltimoLogUsuario($_SESSION["usuarioId"]);

		// objeto secretariaDAO
		$secretariaDAO = new \app\models\SecretariaDAO();
		$secretarias = $secretariaDAO->buscar(5, 0);

		// objeto usuarioDAO
		$usuarioDAO = new \app\models\UsuarioDAO();
		$usuarios = $usuarioDAO->buscar(5, 0);

		// objeto tipoPrefeitoDAO
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
		$tiposPrefeito = $tipoPrefeitoDAO->buscar(5, 0);

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partidos = $partidoDAO->buscar(5, 0);

		// objeto noticiaDAO
		$noticiaDAO = new \app\models\NoticiaDAO();
		$noticias = $noticiaDAO->buscar(5, 0);

		// objeto videoDAO
		$videoDAO = new \app\models\VideoDAO();
		$videos = $videoDAO->buscar(5, 0);

		// objeto licitacaoDAO
		$licitacaoDAO = new \app\models\LicitacaoDAO();
		$licitacoes = $licitacaoDAO->buscar(5, 0);

		// objeto bannerDAO
		$bannerDAO = new \app\models\BannerDAO();
		$banners = $bannerDAO->buscar(5, 0);

		$dados = array(
			"title" => "Painel | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"ultimoAcesso" => $ultimoAcesso,
			"secretarias" => $secretarias,
			"usuarios" => $usuarios,
			"partidos" => $partidos,
			"tiposPrefeito" => $tiposPrefeito,
			"noticias" => $noticias,
			"videos" => $videos,
			"licitacoes" => $licitacoes,
			"banners" => $banners
		);
		$twig->loadTemplate("admin/home.html")->display($dados);

	});

	$app->get("/sair", function() use($app) {
		\app\models\Sessao::logout($app);
	});

});