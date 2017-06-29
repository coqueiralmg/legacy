<?php

$app->group("/admin/painel/licitacao", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto licitacaoDAO
		$licitacaoDAO = new \app\models\LicitacaoDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($licitacaoDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/licitacao");

		// listar licitacoes
		$licitacoes = $pagination->getObjects();

		$dados = array(
			"title" => "Licitações | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"licitacoes" => $licitacoes,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/licitacao/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$dados = array(
			"title" => "Nova Licitação | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/licitacao/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto licitacaoDAO
		$licitacaoDAO = new \app\models\LicitacaoDAO();
		$licitacao = $licitacaoDAO->buscarpeloId($id);		

		$dados = array(
			"title" => "Alterar Licitação | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"licitacao" => $licitacao
		);
		$twig->loadTemplate("admin/licitacao/alterar.html")->display($dados);
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
			"licitacao-titulo" 			=> "validate:obrigatorio&filter:string",
			"licitacao-data-inicio" 	=> "validate:obrigatorio&filter:string",
			"licitacao-data-termino" 	=> "validate:obrigatorio&filter:string",
			"licitacao-descricao" 		=> "validate:obrigatorio&filter:slashes",
			"licitacao-edital" 			=> "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload edital
			$file = new \app\models\File($_FILES["licitacao-edital"]);
			$file->setFolder("public/storage/licitacao-edital/");

			if($file->validateExtension()){

				// filtrar os dados
				$post = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto usuarioDAO
				$usuarioDAO = new \app\models\UsuarioDAO();

				// objeto licitacao
				$licitacao = new \app\models\Licitacao();
				$licitacao->setTitulo($post["licitacao-titulo"]);
				$licitacao->setDescricao($post["licitacao-descricao"]);

				$aux = explode(" ", $post["licitacao-data-inicio"]);
				$explodeData = explode("/", $aux[0]);
				$licitacao->setDataInicio($explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1]);
				
				$aux = explode(" ", $post["licitacao-data-termino"]);
				$explodeData = explode("/", $aux[0]);
				$licitacao->setDataTermino($explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1]);

				$licitacao->setEdital($file->getFullPath());
				$licitacao->setAtivo($post["licitacao-ativo"]);

				// objeto licitacaoDAO
				$licitacaoDAO = new \app\models\LicitacaoDAO();
				$lastIdLicitacao = $licitacaoDAO->inserir($licitacao);

				if(is_numeric($lastIdLicitacao) && $lastIdLicitacao > 0){
					// se salvar o arquivo na pasta
					if($file->saveToFile())
						$app->redirect("/admin/painel/licitacao");

					//$mensagem = array("erro" => "Erro ao fazer upload do edital!");
					print_r($_FILES);
					die();
				}else
					$mensagem = array("erro" => "Erro ao cadastrar licitação!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $file->getExtension() . "' não é permitida para o edital!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Edital | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/licitacao/novo.html")->display(array_merge($dados, $mensagem));
		
	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto licitacaoDAO
		$licitacaoDAO = new \app\models\LicitacaoDAO();
		$licitacaoAntiga = $licitacaoDAO->buscarPeloId($app->request()->put("licitacao-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"licitacao-titulo" 			=> "validate:obrigatorio&filter:string",
			"licitacao-data-inicio" 	=> "validate:obrigatorio&filter:string",
			"licitacao-data-termino" 	=> "validate:obrigatorio&filter:string",
			"licitacao-descricao" 		=> "validate:obrigatorio&filter:slashes",
			"licitacao-edital" 			=> "validate:obrigatorio"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload edital
			$editalLink = $licitacaoAntiga->getEdital();
			$file;
			$podeAlterar = true; // para validar extensao
			$novoEdital = false;
			// se tiver escolhido um novo arquivo
			if(!empty($_FILES["licitacao-edital"]["tmp_name"])){
				// upload edital
				$file = new \app\models\File($_FILES["licitacao-edital"]);
				$file->setFolder("public/storage/licitacao-edital/");
				$editalLink = $file->getFullPath();
				$podeAlterar = $file->validateExtension();
				$novoEdital = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$put = $validation->filtrar($app->request()->put(), $validacoes);

				// objeto usuarioDAO
				$usuarioDAO = new \app\models\UsuarioDAO();

				// objeto licitacao
				$licitacao = new \app\models\Licitacao();
				$licitacao->setId($put["licitacao-id"]);
				$licitacao->setTitulo($put["licitacao-titulo"]);
				$licitacao->setDescricao($put["licitacao-descricao"]);

				$aux = explode(" ", $put["licitacao-data-inicio"]);
				$explodeData = explode("/", $aux[0]);
				$licitacao->setDataInicio($explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1]);
				
				$aux = explode(" ", $put["licitacao-data-termino"]);
				$explodeData = explode("/", $aux[0]);
				$licitacao->setDataTermino($explodeData[2]."-".$explodeData[1]."-".$explodeData[0]." ".$aux[1]);

				$licitacao->setEdital($editalLink);
				$licitacao->setAtivo($put["licitacao-ativo"]);

				if($licitacaoDAO->alterar($licitacao)){
					if($novoEdital){
						// se salvar o arquivo na pasta
						if($file->saveToFile()){
							unlink(ROOT . $licitacaoAntiga->getEdital());
							$app->redirect("/admin/painel/licitacao");
						}
						
						$mensagem = array("erro" => "Erro ao fazer upload do edital!");
					}else{
						$app->redirect("/admin/painel/licitacao");
					}
					
				}else
					$mensagem = array("erro" => "Erro ao alterar licitação!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $file->getExtension() . "' não é permitida para o edital!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar Edital | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put(), // retorna dados para não ter que digitar novamente
			"licitacao" => $licitacaoAntiga
		);
		$twig->loadTemplate("admin/licitacao/alterar.html")->display(array_merge($dados, $mensagem));
		
	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$licitacaoDAO = new \app\models\LicitacaoDAO();
		$licitacao = $licitacaoDAO->buscarPeloId($id);
		if($licitacaoDAO->deletar($id)){
			unlink(ROOT . $licitacao->getEdital());
			echo json_encode("deletou");
		}else
			echo json_encode("ndeletou");
	});

});