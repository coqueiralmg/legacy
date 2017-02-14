<?php

$app->group("/admin/painel/secretaria", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto secretariaDAO
		$secretariaDAO = new \app\models\SecretariaDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($secretariaDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/secretaria");

		// listar secretarias
		$secretarias = $pagination->getObjects();

		$dados = array(
			"title" => "Secretarias | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"secretarias" => $secretarias,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/secretaria/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$dados = array(
			"title" => "Nova Secretaria | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/secretaria/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto secretariaDAO
		$secretariaDAO = new \app\models\SecretariaDAO();
		$secretaria = $secretariaDAO->buscarPeloId($id);

		$dados = array(
			"title" => "Alterar Secretaria | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"secretaria" => $secretaria
		);
		$twig->loadTemplate("admin/secretaria/alterar.html")->display($dados);
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
			"secretaria-nome" 			=> "validate:obrigatorio&filter:string",
			"secretaria-descricao" 		=> "validate:obrigatorio&filter:string",
			//"secretaria-foto" 			=> "alidate:obrigatorio&filter:string",
			"secretaria-email" 			=> "validate:obrigatorio|email&filter|string",
			"secretaria-telefone" 		=> "validate:obrigatorio&filter:string",
			"secretaria-secretario" 	=> "validate:obrigatorio&filter:string"
			//"secretaria-ativo" 			=> "validate:obrigatorio|number"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto secretaria
			$image = new \app\models\Image($_FILES["secretaria-foto"]["name"], $_FILES["secretaria-foto"]["tmp_name"]);
			$image->setFolder("public/storage/secretaria-foto/");

			if($image->validateExtension()){

				// filtrar os dados
				$post = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto secretaria
				$secretaria = new \app\models\Secretaria();
				$secretaria->setNome($post["secretaria-nome"]);
				$secretaria->setDescricao($post["secretaria-descricao"]);
				$secretaria->setFoto($image->getFullPath());
				$secretaria->setEmail($post["secretaria-email"]);
				$secretaria->setTelefone($post["secretaria-telefone"]);
				$secretaria->setSecretario($post["secretaria-secretario"]);
				$secretaria->setAtivo($post["secretaria-ativo"]);

				// objeto secretariaDAO
				$secretariaDAO = new \app\models\SecretariaDAO();
				$lastIdSecretaria = $secretariaDAO->inserir($secretaria);

				if(is_numeric($lastIdSecretaria) && $lastIdSecretaria > 0){
					$image->resize(187, 187, "outside")->crop("center", "center", 187, 187)->saveToFile();
					$app->redirect("/admin/painel/secretaria");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar secretaria!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Nova Secretaria | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/secretaria/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto secretariaDAO
		$secretariaDAO = new \app\models\SecretariaDAO();
		$secretariaAntiga = $secretariaDAO->buscarPeloId($app->request()->put("secretaria-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"secretaria-nome" 			=> "validate:obrigatorio&filter:string",
			"secretaria-descricao" 		=> "validate:obrigatorio&filter:string",
			//"secretaria-foto" 			=> "alidate:obrigatorio&filter:string",
			"secretaria-email" 			=> "validate:obrigatorio|email&filter|string",
			"secretaria-telefone" 		=> "validate:obrigatorio&filter:string",
			"secretaria-secretario" 	=> "validate:obrigatorio&filter:string"
			//"secretaria-ativo" 			=> "validate:obrigatorio|number"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto secretaria
			$foto = $secretariaAntiga->getFoto();
			$image;
			$podeAlterar = true; // para validar extensao
			$novaFoto = false;
			// se tiver escolhido uma nova foto
			if(!empty($_FILES["secretaria-foto"]["tmp_name"])){
				$image = new \app\models\Image($_FILES["secretaria-foto"]["name"], $_FILES["secretaria-foto"]["tmp_name"]);
				$image->setFolder("public/storage/secretaria-foto/");
				$foto = $image->getFullPath();
				$podeAlterar = $image->validateExtension();
				$novaFoto = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$put = $validation->filtrar($app->request()->put(), $validacoes);

				// objeto secretaria
				$secretaria = new \app\models\Secretaria();
				$secretaria->setId($put["secretaria-id"]);
				$secretaria->setNome($put["secretaria-nome"]);
				$secretaria->setDescricao($put["secretaria-descricao"]);
				$secretaria->setFoto($foto);
				$secretaria->setEmail($put["secretaria-email"]);
				$secretaria->setTelefone($put["secretaria-telefone"]);
				$secretaria->setSecretario($put["secretaria-secretario"]);
				$secretaria->setAtivo($put["secretaria-ativo"]);

				if($secretariaDAO->alterar($secretaria)){
					if($novaFoto){
						$image->resize(187, 187, "outside")->crop("center", "center", 187, 187)->saveToFile();
						unlink(ROOT . $secretariaAntiga->getFoto());
					}
					$app->redirect("/admin/painel/secretaria");
				}else
					$mensagem = array("erro" => "Erro ao alterar secretaria!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro

		$dados = array(
			"title" => "Alterar Secretaria | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"secretaria" => $secretariaAntiga,
			"dados" => $app->request()->put() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/secretaria/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$secretariaDAO = new \app\models\SecretariaDAO();
		$secretaria = $secretariaDAO->buscarPeloId($id);
		if($secretariaDAO->deletar($id)){
			unlink(ROOT . $secretaria->getFoto());
			echo json_encode("deletou");
		}else
			echo json_encode("ndeletou");
	});

});