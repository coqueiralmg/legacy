<?php

$app->group("/admin/painel/noticia", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto noticiaDAO
		$noticiaDAO = new \app\models\NoticiaDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($noticiaDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/noticia");

		// listar noticias
		$noticias = $pagination->getObjects();

		$dados = array(
			"title" => "Notícias | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"noticias" => $noticias,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/noticia/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);

		$dados = array(
			"title" => "Nova Notícia | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/noticia/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto noticiaDAO
		$noticiaDAO = new \app\models\NoticiaDAO();
		$noticia = $noticiaDAO->buscarpeloId($id);		

		$dados = array(
			"title" => "Alterar Notícia | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"noticia" => $noticia
		);
		$twig->loadTemplate("admin/noticia/alterar.html")->display($dados);
	});

	// post novo
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
			"noticia-foto" 			=> "validate:obrigatorio",
			"noticia-texto"			=> "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto
			$image = new \app\models\Image($_FILES["noticia-foto"]["name"], $_FILES["noticia-foto"]["tmp_name"]);
			$image->setFolder("public/storage/noticia-foto/large/");

			if($image->validateExtension()){

				// filtrar os dados
				$postData = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto usuarioDAO
				$usuarioDAO = new \app\models\UsuarioDAO();

				// objeto post
				$post = new \app\models\Post();
				$post->setTitulo($postData["post-titulo"]);

				// data postagem
				$dataPostagem = date("Y-m-d H:i:s");
				if(!empty($postData["post-data-postagem"])){
					$aux = explode(" ", $postData["post-data-postagem"]);
					$explodeData = explode("/", $aux[0]);
					$dataPostagem = $explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1];
				}
				$post->setDataPostagem($dataPostagem);

				$post->setAutor($usuarioDAO->buscarPeloId($_SESSION["usuarioId"]));
				$post->setDestaque($postData["post-destaque"]);
				$post->setAtivo($postData["post-ativo"]);

				// objeto noticia
				$noticia = new \app\models\Noticia();
				$noticia->setFoto($image->getFullPath());
				$noticia->setTexto($postData["noticia-texto"]);
				$noticia->setPost($post);

				// objeto noticiaDAO
				$noticiaDAO = new \app\models\NoticiaDAO();
				$lastIdNoticia = $noticiaDAO->inserir($noticia);

				if(is_numeric($lastIdNoticia) && $lastIdNoticia > 0){
					// salva a foto large
					$image->resize(500, 361)->crop("center", "center", 500, 361)->saveToFile();
					// salva a foto small
					$image->setFolder("public/storage/noticia-foto/small/");
					$image->resize(198, 143)->crop("center", "center", 198, 143)->saveToFile();
					$app->redirect("/admin/painel/noticia");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar notícia!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida para a foto!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Nova Notícia | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/noticia/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto noticiaDAO
		$noticiaDAO = new \app\models\NoticiaDAO();
		$noticiaAntiga = $noticiaDAO->buscarPeloId($app->request()->put("noticia-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"post-titulo" 			=> "validate:obrigatorio&filter:string",
			//"post-data-postagem" 	=> "filter:string",
			"noticia-foto" 			=> "validate:obrigatorio",
			"noticia-texto"			=> "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto
			$foto = $noticiaAntiga->getFoto();
			$image;
			$podeAlterar = true; // para validar extensao
			$novaFoto = false;
			// se tiver escolhido uma nova foto
			if(!empty($_FILES["noticia-foto"]["tmp_name"])){
				$image = new \app\models\Image($_FILES["noticia-foto"]["name"], $_FILES["noticia-foto"]["tmp_name"]);
				$image->setFolder("public/storage/noticia-foto/large/");
				$foto = $image->getFullPath();
				$podeAlterar = $image->validateExtension();
				$novaFoto = true;
			}

			if($podeAlterar){

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

				// objeto noticia
				$noticia = new \app\models\Noticia();
				$noticia->setId($putData["noticia-id"]);
				$noticia->setFoto($foto);
				$noticia->setTexto($putData["noticia-texto"]);
				$noticia->setPost($post);

				if($noticiaDAO->alterar($noticia)){
					if($novaFoto){
						// salva a foto large
						$image->resize(500, 361)->crop("center", "center", 500, 361)->saveToFile();
						// salva a foto small
						$image->setFolder("public/storage/noticia-foto/small/");
						$image->resize(198, 143)->crop("center", "center", 198, 143)->saveToFile();
						// exclui foto large e small
						unlink(ROOT . $noticiaAntiga->getFoto());
						unlink(ROOT . str_replace("large", "small", $noticiaAntiga->getFoto()));
					}
					$app->redirect("/admin/painel/noticia");
				}else
					$mensagem = array("erro" => "Erro ao alterar notícia!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida para a foto!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar Notícia | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"noticia" => $noticiaAntiga
		);
		$twig->loadTemplate("admin/noticia/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$noticiaDAO = new \app\models\NoticiaDAO();
		$noticia = $noticiaDAO->buscarPeloId($id);
		if($noticiaDAO->deletar($id)){
			unlink(ROOT . $noticia->getFoto());
			echo json_encode("deletou");
		}else
			echo json_encode("ndeletou");
	});

});