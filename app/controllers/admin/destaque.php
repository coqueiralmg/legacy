<?php

$app->group("/admin/painel/destaque", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto destaqueDAO
		$destaqueDAO = new \app\models\DestaqueDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($destaqueDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/destaque");

		// listar destaques
		$destaques = $pagination->getObjects();

		$dados = array(
			"title" => "Destaques | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"destaques" => $destaques,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/destaque/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);

		$dados = array(
			"title" => "Novo Destaque | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/destaque/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto destaqueDAO
		$destaqueDAO = new \app\models\DestaqueDAO();
		$destaque = $destaqueDAO->buscarpeloId($id);		

		$dados = array(
			"title" => "Alterar Destaque | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"destaque" => $destaque
		);
		$twig->loadTemplate("admin/destaque/alterar.html")->display($dados);
	});

	$app->post("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"destaque-titulo" 		=> "validate:obrigatorio&filter:string",
			"destaque-foto" 		=> "validate:obrigatorio",
			"destaque-link" 		=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){
			
			// upload foto
			$image = new \app\models\Image($_FILES["destaque-foto"]["name"], $_FILES["destaque-foto"]["tmp_name"]);
			$image->setFolder("public/storage/destaque-foto/");

			if($image->validateExtension()){

				// filtrar os dados
				$postData = $validation->filtrar($app->request()->post(), $validacoes);

				//objeto destaque
				$destaque = new \app\models\Destaque();
				$destaque->setTitulo($postData["destaque-titulo"]);
				$destaque->setFoto($image->getFullPath());
				$destaque->setLink($postData["destaque-link"]);
				$destaque->setAtivo($postData["destaque-ativo"]);

				// objeto destaqueDAO
				$destaqueDAO = new \app\models\DestaqueDAO();
				$lastIdDestaque = $destaqueDAO->inserir($destaque);

				if(is_numeric($lastIdDestaque) && $lastIdDestaque > 0){
					// salva a foto large
					$image->resize(230, 163)->crop("center", "center", 230, 163)->saveToFile();
					// salva a foto small
					$app->redirect("/admin/painel/destaque");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar destaque!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida para a foto!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Destaque | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/destaque/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto destaqueDAO
		$destaqueDAO = new \app\models\DestaqueDAO();
		$destaqueAntigo = $destaqueDAO->buscarPeloId($app->request()->put("destaque-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"destaque-titulo" 		=> "validate:obrigatorio&filter:string",
			"destaque-foto" 		=> "validate:obrigatorio",
			"destaque-link" 		=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto
			$foto = $destaqueAntigo->getFoto();
			$image;
			$podeAlterar = true; // para validar extensao
			$novaFoto = false;
			// se tiver escolhido uma nova foto
			if(!empty($_FILES["destaque-foto"]["tmp_name"])){
				$image = new \app\models\Image($_FILES["destaque-foto"]["name"], $_FILES["destaque-foto"]["tmp_name"]);
				$image->setFolder("public/storage/destaque-foto/");
				$foto = $image->getFullPath();
				$podeAlterar = $image->validateExtension();
				$novaFoto = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$putData = $validation->filtrar($app->request()->put(), $validacoes);

				//objeto destaque
				$destaque = new \app\models\Destaque();
				$destaque->setId($putData["destaque-id"]);
				$destaque->setTitulo($putData["destaque-titulo"]);
				$destaque->setFoto($foto);
				$destaque->setLink($putData["destaque-link"]);
				$destaque->setAtivo($putData["destaque-ativo"]);

				if($destaqueDAO->alterar($destaque)){
					if($novaFoto){
						// salva a foto large
						$image->resize(230, 163)->crop("center", "center", 230, 163)->saveToFile();
						// exclui foto
						unlink(ROOT . $destaqueAntigo->getFoto());
					}
					$app->redirect("/admin/painel/destaque");
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
			"title" => "Alterar Destaque | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"noticia" => $destaqueAntigo
		);
		$twig->loadTemplate("admin/destaque/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$destaqueDAO = new \app\models\DestaqueDAO();
		$destaque = $destaqueDAO->buscarPeloId($id);
		if($destaqueDAO->deletar($id)){
			unlink(ROOT . $destaque->getFoto());
			echo json_encode("deletou");
		}
		else
			echo json_encode("ndeletou");
	});

});