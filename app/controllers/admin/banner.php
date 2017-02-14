<?php

$app->group("/admin/painel/banner", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto bannerDAO
		$bannerDAO = new \app\models\BannerDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($bannerDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/banner");

		// listar banners
		$banners = $pagination->getObjects();

		$dados = array(
			"title" => "Banners | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"banners" => $banners,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/banner/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$dados = array(
			"title" => "Novo Banner | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/banner/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto bannerDAO
		$bannerDAO = new \app\models\BannerDAO();
		$banner = $bannerDAO->buscarpeloId($id);		

		$dados = array(
			"title" => "Alterar Banner | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"banner" => $banner
		);
		$twig->loadTemplate("admin/banner/alterar.html")->display($dados);
	});

	$app->post("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"banner-titulo" 		=> "validate:obrigatorio&filter:string",
			"banner-descricao" 		=> "validate:obrigatorio&filter:string",
			"banner-banner"			=> "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload banner
			$image = new \app\models\Image($_FILES["banner-banner"]["name"], $_FILES["banner-banner"]["tmp_name"]);
			$image->setFolder("public/storage/banner/large/");

			if($image->validateExtension()){

				// filtrar os dados
				$post = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto banner
				$banner = new \app\models\Banner();
				$banner->setTitulo($post["banner-titulo"]);
				$banner->setDescricao($post["banner-descricao"]);
				$banner->setBanner($image->getFullPath());
				$banner->setAtivo($post["banner-ativo"]);

				// objeto bannerDAO
				$bannerDAO = new \app\models\BannerDAO();
				$lastIdBanner = $bannerDAO->inserir($banner);

				if(is_numeric($lastIdBanner) && $lastIdBanner > 0){
					// salva a foto large (proporcional a 1200px largura)
					$image->resize(1140, 463)->saveToFile();
					// salva a foto small
					$app->redirect("/admin/painel/banner");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar banner!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida para o banner!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Banner | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/banner/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto bannerDAO
		$bannerDAO = new \app\models\BannerDAO();
		$bannerAntigo = $bannerDAO->buscarPeloId($app->request()->put("banner-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"banner-titulo" 		=> "validate:obrigatorio&filter:string",
			"banner-descricao" 		=> "validate:obrigatorio&filter:string",
			"banner-banner"			=> "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload banner
			$bannerImg = $bannerAntigo->getBanner();
			$image;
			$podeAlterar = true; // para validar extensao
			$novoBanner = false;
			// se tiver escolhido um novo banner
			if(!empty($_FILES["banner-banner"]["tmp_name"])){
				$image = new \app\models\Image($_FILES["banner-banner"]["name"], $_FILES["banner-banner"]["tmp_name"]);
				$image->setFolder("public/storage/banner/large/");
				$bannerImg = $image->getFullPath();
				$podeAlterar = $image->validateExtension();
				$novoBanner = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$put = $validation->filtrar($app->request()->put(), $validacoes);

				// objeto banner
				$banner = new \app\models\Banner();
				$banner->setId($put["banner-id"]);
				$banner->setTitulo($put["banner-titulo"]);
				$banner->setDescricao($put["banner-descricao"]);
				$banner->setBanner($bannerImg);
				$banner->setAtivo($put["banner-ativo"]);

				if($bannerDAO->alterar($banner)){
					if($novoBanner){
						// salva a foto large (proporcional a 1200px largura)
						$image->resize(1140, 463)->saveToFile();
						unlink(ROOT . $bannerAntigo->getBanner());
					}
					$app->redirect("/admin/painel/banner");
				}else
					$mensagem = array("erro" => "Erro ao alterar banner!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida para o banner!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar Banner | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"banner" => $bannerAntigo
		);
		$twig->loadTemplate("admin/banner/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$bannerDAO = new \app\models\BannerDAO();
		$banner = $bannerDAO->buscarPeloId($id);
		if($bannerDAO->deletar($id)){
			unlink(ROOT . $banner->getBanner());
			echo json_encode("deletou");
		}else
			echo json_encode("ndeletou");
	});

});