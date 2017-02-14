<?php

$app->group("/admin/painel/video", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto videoDAO
		$videoDAO = new \app\models\VideoDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($videoDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/video");

		// listar videos
		$videos = $pagination->getObjects();

		$dados = array(
			"title" => "Vídeos | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"videos" => $videos,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/video/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);

		$dados = array(
			"title" => "Novo Vídeo | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/video/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto videoDAO
		$videoDAO = new \app\models\VideoDAO();
		$video = $videoDAO->buscarpeloId($id);		

		$dados = array(
			"title" => "Alterar Vídeo | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"video" => $video
		);
		$twig->loadTemplate("admin/video/alterar.html")->display($dados);
	});

	$app->post("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"post-titulo" 			=> "validate:obrigatorio&filter:string",
			"post-data-postagem" 	=> "filter:string",
			"video-video" 			=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// filtrar os dados
			$postData = $validation->filtrar($app->request()->post(), $validacoes);

			// objeto usuarioDAO
			$usuarioDAO = new \app\models\UsuarioDAO();

			// objeto post
			$post = new \app\models\Post();
			$post->setTitulo($postData["post-titulo"]);
			$post->setDataPostagem((!empty($postData["data-postagem"]) ? $postData["data-postagem"] : date("Y-m-d H:i:s")));
			$post->setAutor($usuarioDAO->buscarPeloId($_SESSION["usuarioId"]));
			$post->setDestaque($postData["post-destaque"]);
			$post->setAtivo($postData["post-ativo"]);

			// objeto video
			$video = new \app\models\Video();
			$video->setVideo($postData["video-video"]);
			$video->setPost($post);

			// objeto videoDAO
			$videoDAO = new \app\models\VideoDAO();
			$lastIdVideo = $videoDAO->inserir($video);

			if(is_numeric($lastIdVideo) && $lastIdVideo > 0){
				$app->redirect("/admin/painel/video");
			}else
				$mensagem = array("erro" => "Erro ao cadastrar vídeo!");

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Vídeo | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/video/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto videoDAO
		$videoDAO = new \app\models\VideoDAO();
		$videoAntigo = $videoDAO->buscarpeloId($app->request()->put("video-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"post-titulo" 			=> "validate:obrigatorio&filter:string",
			//"post-data-postagem" 	=> "filter:string",
			"video-video" 			=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// filtrar os dados
			$putData = $validation->filtrar($app->request()->put(), $validacoes);

			// objeto usuarioDAO
			$usuarioDAO = new \app\models\UsuarioDAO();

			// objeto post
			$post = new \app\models\Post();
			$post->setId($putData["post-id"]);
			$post->setTitulo($putData["post-titulo"]);
			$post->setDataAlteracao(date("Y-m-d H:i:s"));
			$post->setAutor($usuarioDAO->buscarPeloId($_SESSION["usuarioId"]));
			$post->setDestaque($putData["post-destaque"]);
			$post->setAtivo($putData["post-ativo"]);

			// objeto video
			$video = new \app\models\Video();
			$video->setId($putData["video-id"]);
			$video->setVideo($putData["video-video"]);
			$video->setPost($post);

			if($videoDAO->alterar($video)){
				$app->redirect("/admin/painel/video");
			}else
				$mensagem = array("erro" => "Erro ao alterar vídeo!");

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar Vídeo | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"video" => $videoAntigo
		);
		$twig->loadTemplate("admin/video/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$videoDAO = new \app\models\VideoDAO();
		if($videoDAO->deletar($id))
			echo json_encode("deletou");
		else
			echo json_encode("ndeletou");
	});

});