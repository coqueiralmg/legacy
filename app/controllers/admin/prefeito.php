<?php

$app->group("/admin/painel/prefeito", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto prefeitoDAO
		$prefeitoDAO = new \app\models\PrefeitoDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($prefeitoDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/prefeito");

		// listar prefeitos
		$prefeitos = $pagination->getObjects();

		$dados = array(
			"title" => "Prefeitos | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"prefeitos" => $prefeitos,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/prefeito/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partidos = $partidoDAO->buscar();

		// objeto tipoPrefeitoDAO
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
		$tiposPrefeito = $tipoPrefeitoDAO->buscar();

		$dados = array(
			"title" => "Novo Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"partidos" => $partidos,
			"tiposPrefeito" => $tiposPrefeito
		);
		$twig->loadTemplate("admin/prefeito/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partidos = $partidoDAO->buscar();

		// objeto tipoPrefeitoDAO
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
		$tiposPrefeito = $tipoPrefeitoDAO->buscar();

		// objeto prefeitoDAO
		$prefeitoDAO = new \app\models\PrefeitoDAO();
		$prefeito = $prefeitoDAO->buscarPeloId($id);

		$dados = array(
			"title" => "Alterar Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"partidos" => $partidos,
			"tiposPrefeito" => $tiposPrefeito,
			"prefeito" => $prefeito
		);
		$twig->loadTemplate("admin/prefeito/alterar.html")->display($dados);
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
			"prefeito-partido" 			=> "validate:obrigatorio|number",
			"prefeito-tipo" 			=> "validate:obrigatorio|number",
			"prefeito-foto" 			=> "validate:obrigatorio",
			"prefeito-sobre" 			=> "validate:obrigatorio&filter:string",
			"prefeito-falecimento" 		=> "filter:string",
			"usuario-usuario" 			=> "validate:obrigatorio&filter:string",
			"usuario-email" 			=> "validate:obrigatorio|email&filter:string",
			"usuario-senha" 			=> "validate:obrigatorio&filter:string",
			//"usuario-ativo" 			=> "validate:obrigatorio|number",
			"usuario-nivel" 			=> "validate:obrigatorio|number",
			"pessoa-nome" 				=> "validate:obrigatorio&filter:string",
			"pessoa-apelido" 			=> "validate:obrigatorio&filter:string",
			"pessoa-data-nascimento" 	=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto prefeito
			$image = new \app\models\Image($_FILES["prefeito-foto"]["name"], $_FILES["prefeito-foto"]["tmp_name"]);
			$image->setFolder("public/storage/prefeito-foto/");

			if($image->validateExtension()){

				// filtrar os dados
				$post = $validation->filtrar($app->request()->post(), $validacoes);

				// objeto pessoa
				$pessoa = new \app\models\Pessoa();
				$pessoa->setNome($post["pessoa-nome"]);
				$pessoa->setApelido($post["pessoa-apelido"]);
				$pessoa->setDataNascimento($post["pessoa-data-nascimento"]);

				// objeto usuario
				$usuario = new \app\models\Usuario();
				$usuario->setUsuario($post["usuario-usuario"]);
				$usuario->setEmail($post["usuario-email"]);
				$usuario->setSenha(sha1($post["usuario-senha"]));
				$usuario->setAtivo($post["usuario-ativo"]);
				$usuario->setNivel($post["usuario-nivel"]);
				$usuario->setPessoa($pessoa);

				// objeto partidoDAO
				$partidoDAO = new \app\models\PartidoDAO();
				$partido = $partidoDAO->buscarPeloId($post["prefeito-partido"]);

				// objeto tipoPrefeitoDAO
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
				$tipoPrefeito = $tipoPrefeitoDAO->buscarPeloId($post["prefeito-tipo"]);

				// objeto prefeito
				$prefeito = new \app\models\Prefeito();
				$prefeito->setPartido($partido);
				$prefeito->setTipo($tipoPrefeito);
				$prefeito->setUsuario($usuario);
				$prefeito->setFoto($image->getFullPath());
				$prefeito->setSobre($post["prefeito-sobre"]);
				$falecimento = null;
				if(!empty($post["prefeito-falecimento"])){
					$aux = explode("/", $post["prefeito-falecimento"]);
					$falecimento = "{$aux[2]}-{$aux[1]}.{$aux[0]}";
				}
				$prefeito->setFalecimento($falecimento);

				// objeto prefeitoDAO
				$prefeitoDAO = new \app\models\PrefeitoDAO();
				$lastIdPrefeito = $prefeitoDAO->inserir($prefeito);

				if(is_numeric($lastIdPrefeito) && $lastIdPrefeito > 0){
					$image->resize(187, 187, "outside")->crop("center", "center", 187, 187)->saveToFile();
					$app->redirect("/admin/painel/prefeito");
				}else
					$mensagem = array("erro" => "Erro ao cadastrar prefeito!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partidos = $partidoDAO->buscar();

		// objeto tipoPrefeitoDAO
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
		$tiposPrefeito = $tipoPrefeitoDAO->buscar();

		$dados = array(
			"title" => "Novo Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"partidos" => $partidos,
			"tiposPrefeito" => $tiposPrefeito,
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/prefeito/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		/*if(!empty($_FILES["prefeito-foto"]["tmp_name"])){
			print_r($_FILES["prefeito-foto"]);
		}*/

		// objeto tipoPrefeitoDAO
		$prefeitoDAO = new \app\models\PrefeitoDAO();
		$prefeitoAntigo = $prefeitoDAO->buscarPeloId($app->request()->put("prefeito-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"prefeito-partido" 			=> "validate:obrigatorio|number",
			"prefeito-tipo" 			=> "validate:obrigatorio|number",
			"prefeito-foto" 			=> "validate:obrigatorio",
			"prefeito-sobre" 			=> "validate:obrigatorio&filter:string",
			"prefeito-falecimento" 		=> "filter:string",
			"usuario-usuario" 			=> "validate:obrigatorio&filter:string",
			"usuario-email" 			=> "validate:obrigatorio|email&filter:string",
			//"usuario-senha" 			=> "validate:obrigatorio&filter:string",
			//"usuario-ativo" 			=> "validate:obrigatorio|number",
			"usuario-nivel" 			=> "validate:obrigatorio|number",
			"pessoa-nome" 				=> "validate:obrigatorio&filter:string",
			"pessoa-apelido" 			=> "validate:obrigatorio&filter:string",
			"pessoa-data-nascimento" 	=> "validate:obrigatorio&filter:string"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// upload foto prefeito
			$foto = $prefeitoAntigo->getFoto();
			$image;
			$podeAlterar = true; // para validar extensao
			$novaFoto = false;
			// se tiver escolhido uma nova foto
			if(!empty($_FILES["prefeito-foto"]["tmp_name"])){
				$image = new \app\models\Image($_FILES["prefeito-foto"]["name"], $_FILES["prefeito-foto"]["tmp_name"]);
				$image->setFolder("public/storage/prefeito-foto/");
				$foto = $image->getFullPath();
				$podeAlterar = $image->validateExtension();
				$novaFoto = true;
			}

			if($podeAlterar){

				// filtrar os dados
				$put = $validation->filtrar($app->request()->put(), $validacoes);

				// objeto pessoa
				$pessoa = new \app\models\Pessoa();
				$pessoa->setId($put["pessoa-id"]);
				$pessoa->setNome($put["pessoa-nome"]);
				$pessoa->setApelido($put["pessoa-apelido"]);
				$pessoa->setDataNascimento($put["pessoa-data-nascimento"]);

				// objeto usuario
				$usuario = new \app\models\Usuario();
				$usuario->setId($put["usuario-id"]);
				$usuario->setUsuario($put["usuario-usuario"]);
				$usuario->setEmail($put["usuario-email"]);
				$usuario->setSenha($put["usuario-senha"]);
				$usuario->setSenha((empty($put["usuario-senha"])) ? $prefeitoAntigo->getUsuario()->getSenha() : sha1($put["usuario-senha"]) );
				$usuario->setAtivo($put["usuario-ativo"]);
				$usuario->setNivel($put["usuario-nivel"]);
				$usuario->setPessoa($pessoa);

				// objeto partidoDAO
				$partidoDAO = new \app\models\PartidoDAO();
				$partido = $partidoDAO->buscarPeloId($put["prefeito-partido"]);

				// objeto tipoPrefeitoDAO
				$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
				$tipoPrefeito = $tipoPrefeitoDAO->buscarPeloId($put["prefeito-tipo"]);

				// objeto prefeito
				$prefeito = new \app\models\Prefeito();
				$prefeito->setId($put["prefeito-id"]);
				$prefeito->setPartido($partido);
				$prefeito->setTipo($tipoPrefeito);
				$prefeito->setUsuario($usuario);
				$prefeito->setFoto($foto);
				$prefeito->setSobre($put["prefeito-sobre"]);
				$falecimento = null;
				if(!empty($put["prefeito-falecimento"])){
					$aux = explode("/", $put["prefeito-falecimento"]);
					$falecimento = "{$aux[2]}-{$aux[1]}.{$aux[0]}";
				}
				$prefeito->setFalecimento($falecimento);

				if($prefeitoDAO->alterar($prefeito)){
					if($novaFoto){
						$image->resize(187, 187, "outside")->crop("center", "center", 187, 187)->saveToFile();
						unlink(ROOT . $prefeitoAntigo->getFoto());
					}
					$app->redirect("/admin/painel/prefeito");
				}else
					$mensagem = array("erro" => "Erro ao alterar prefeito!");

			}else{
				$mensagem = array("erro" => "A extensão '" . $image->getExtension() . "' não é permitida!");
			}

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro

		// objeto partidoDAO
		$partidoDAO = new \app\models\PartidoDAO();
		$partidos = $partidoDAO->buscar();

		// objeto tipoPrefeitoDAO
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
		$tiposPrefeito = $tipoPrefeitoDAO->buscar();

		$dados = array(
			"title" => "Alterar Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"partidos" => $partidos,
			"tiposPrefeito" => $tiposPrefeito,
			"prefeito" => $prefeitoAntigo,
			"dados" => $app->request()->put() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/prefeito/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$prefeitoDAO = new \app\models\PrefeitoDAO();
		if($prefeitoDAO->deletar($id))
			echo json_encode("deletou");
		else
			echo json_encode("ndeletou");
	});

});