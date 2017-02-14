<?php

$app->group("/admin/painel/partido", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($partidoDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/partido");

		// listar partidos
		$partidos = $pagination->getObjects();

		$dados = array(
			"title" => "Partidos | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"partidos" => $partidos,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/partido/listar.html")->display($dados);
	});

	// renderiza formulário
	$app->get("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);
		$dados = array(
			"title" => "Novo Partido | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/partido/novo.html")->display($dados);
	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partido = $partidoDAO->buscarpeloId($id);

		$dados = array(
			"title" => "Alterar Partido | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"partido" => $partido
		);
		$twig->loadTemplate("admin/partido/alterar.html")->display($dados);
	});

	// post novo
	$app->post("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"partido-nome" => "validate:obrigatorio&filter:string",
			"partido-sigla" => "validate:obrigatorio&filter:string",
			"partido-logo" => "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload logo
			$image = new \app\models\Image($_FILES["partido-logo"]["name"], $_FILES["partido-logo"]["tmp_name"]);
			$image->setFolder("public/storage/partido-logo/");

			if($image->validateExtension()){

				// filtrar os dados
				$post = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto Partido
				$partido = new \app\models\Partido();
				$partido->setNome($post["partido-nome"]);
				$partido->setSigla($post["partido-sigla"]);
				$partido->setLogo($image->getFullPath());

				// objeto PartidoDAO
				$partidoDAO = new \app\models\PartidoDAO();
				$lastIdpartido = $partidoDAO->inserir($partido);

				if(is_numeric($lastIdpartido) && $lastIdpartido > 0){
					$image->resize(150, 150, "outside")->crop("center", "center", 150, 150)->saveToFile();
					$app->redirect("/admin/painel/partido");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar tipo de partido!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Partido | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post(), // retorna dados para não ter que digitar novamente
			"files" => $_FILES
		);
		$twig->loadTemplate("admin/partido/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partidoAntigo = $partidoDAO->buscarPeloId($app->request()->put("partido-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"partido-nome" => "validate:obrigatorio&filter:string",
			"partido-sigla" => "validate:obrigatorio&filter:string",
			"partido-logo" => "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload logo partido
			$foto = $partidoAntigo->getLogo();
			$image;
			$podeAlterar = true; // para validar extensao
			$novaFoto = false;
			// se tiver escolhido uma nova foto
			if(!empty($_FILES["partido-logo"]["tmp_name"])){
				$image = new \app\models\Image($_FILES["partido-logo"]["name"], $_FILES["partido-logo"]["tmp_name"]);
				$image->setFolder("public/storage/partido-logo/");
				$foto = $image->getFullPath();
				$podeAlterar = $image->validateExtension();
				$novaFoto = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$put = $validation->filtrar($app->request()->put(), $validacoes);

				// objeto Partido
				$partido = new \app\models\Partido();
				$partido->setId($put["partido-id"]);
				$partido->setNome($put["partido-nome"]);
				$partido->setSigla($put["partido-sigla"]);
				$partido->setLogo($foto);

				if($partidoDAO->alterar($partido)){
					if($novaFoto){
						$image->resize(150, 150, "outside")->crop("center", "center", 150, 150)->saveToFile();
						unlink(ROOT . $partidoAntigo->getLogo());
					}
					$app->redirect("/admin/painel/partido");
				}else
					$mensagem = array("erro" => "Erro ao alterar partido!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar Partido | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"files" => $_FILES,
			"partido" => $partidoAntigo
		);
		$twig->loadTemplate("admin/partido/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$partidoDAO = new \app\models\PartidoDAO();
		$partido = $partidoDAO->buscarPeloId($id);
		if($partidoDAO->deletar($id)){
			unlink(ROOT . $partido->getLogo());
			echo json_encode("deletou");
		}else
			echo json_encode("ndeletou");
	});

});