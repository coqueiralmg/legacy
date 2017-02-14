<?php

$app->group("/admin/painel/legislacao", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto legislacaoDAO
		$legislacaoDAO = new \app\models\LegislacaoDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($legislacaoDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/legislacao");

		// listar legislacoes
		$legislacoes = $pagination->getObjects();

		$dados = array(
			"title" => "Legislações | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"legislacoes" => $legislacoes,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/legislacao/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$dados = array(
			"title" => "Nova Legislação | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/legislacao/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto legislacaoDAO
		$legislacaoDAO = new \app\models\LegislacaoDAO();
		$legislacao = $legislacaoDAO->buscarpeloId($id);		

		$dados = array(
			"title" => "Alterar Legislação | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"legislacao" => $legislacao
		);
		$twig->loadTemplate("admin/legislacao/alterar.html")->display($dados);
	});

	// post novo
	$app->post("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"legislacao-titulo" 		=> "validate:obrigatorio&filter:string",
			"legislacao-descricao" 		=> "validate:obrigatorio&filter:slashes",
			"legislacao-data" 			=> "validate:obrigatorio&filter:string",
			"legislacao-arquivo" 		=> "validate:obrigatorio",
			"legislacao-numero" 		=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload arquivo
			$file = new \app\models\File($_FILES["legislacao-arquivo"]);
			$file->setFolder("public/storage/legislacao-arquivo/");

			if($file->validateExtension()){

				// filtrar os dados
				$post = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto legislacao
				$legislacao = new \app\models\Legislacao();
				$legislacao->setTitulo($post["legislacao-titulo"]);
				$legislacao->setDescricao($post["legislacao-descricao"]);

				$aux = explode(" ", $post["legislacao-data"]);
				$explodeData = explode("/", $aux[0]);
				$legislacao->setData($explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1]);

				$legislacao->setArquivo($file->getFullPath());
				$legislacao->setNumero($post["legislacao-numero"]);
				$legislacao->setAtivo($post["legislacao-ativo"]);

				// objeto legislacaoDAO
				$legislacaoDAO = new \app\models\LegislacaoDAO();
				$lastIdLegislacao = $legislacaoDAO->inserir($legislacao);

				if(is_numeric($lastIdLegislacao) && $lastIdLegislacao > 0){
					// se salvar o arquivo na pasta
					if($file->saveToFile())
						$app->redirect("/admin/painel/legislacao");
					$mensagem = array("erro" => "Erro ao fazer upload do arquivo!");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar legislação!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $file->getExtension() . "' não é permitida para o arquivo!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Nova Legislação | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/legislacao/novo.html")->display(array_merge($dados, $mensagem));
		
	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto legislacaoDAO
		$legislacaoDAO = new \app\models\LegislacaoDAO();
		$legislacaoAntiga = $legislacaoDAO->buscarPeloId($app->request()->put("legislacao-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"legislacao-titulo" 		=> "validate:obrigatorio&filter:string",
			"legislacao-descricao" 		=> "validate:obrigatorio&filter:slashes",
			"legislacao-data" 			=> "validate:obrigatorio&filter:string",
			"legislacao-arquivo" 		=> "validate:obrigatorio",
			"legislacao-numero" 		=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload arquivo
			$arquivoLink = $legislacaoAntiga->getArquivo();
			$file;
			$podeAlterar = true; // para validar extensao
			$novoArquivo = false;
			// se tiver escolhido um novo arquivo
			if(!empty($_FILES["legislacao-arquivo"]["tmp_name"])){
				// upload arquivo
				$file = new \app\models\File($_FILES["legislacao-arquivo"]);
				$file->setFolder("public/storage/legislacao-arquivo/");
				$arquivoLink = $file->getFullPath();
				$podeAlterar = $file->validateExtension();
				$novoArquivo = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$put = $validation->filtrar($app->request()->put(), $validacoes);

				// objeto usuarioDAO
				$usuarioDAO = new \app\models\UsuarioDAO();

				// objeto licitacao
				$legislacao = new \app\models\Legislacao();
				$legislacao->setId($put["legislacao-id"]);
				$legislacao->setTitulo($put["legislacao-titulo"]);
				$legislacao->setDescricao($put["legislacao-descricao"]);

				$aux = explode(" ", $put["legislacao-data"]);
				$explodeData = explode("/", $aux[0]);
				$legislacao->setData($explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1]);
				
				$legislacao->setArquivo($arquivoLink);
				$legislacao->setNumero($put["legislacao-numero"]);
				$legislacao->setAtivo($put["legislacao-ativo"]);

				if($legislacaoDAO->alterar($legislacao)){
					if($novoArquivo){
						// se salvar o arquivo na pasta
						if($file->saveToFile()){
							unlink(ROOT . $legislacaoAntiga->getArquivo());
							$app->redirect("/admin/painel/legislacao");
						}
						$mensagem = array("erro" => "Erro ao fazer upload do arquivo!");
					}else{
						$app->redirect("/admin/painel/legislacao");
					}
					
				}else
					$mensagem = array("erro" => "Erro ao alterar legislação!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $file->getExtension() . "' não é permitida para o arquivo!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar legislação | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"legislacao" => $legislacaoAntiga
		);
		$twig->loadTemplate("admin/legislacao/alterar.html")->display(array_merge($dados, $mensagem));
		
	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$legislacaoDAO = new \app\models\LegislacaoDAO();
		$legislacao = $legislacaoDAO->buscarPeloId($id);
		if($legislacaoDAO->deletar($id)){
			unlink(ROOT . $legislacao->getArquivo());
			echo json_encode("deletou");
		}else
			echo json_encode("ndeletou");
	});

});