<?php

$app->group("/admin/painel/tipo-prefeito", function() use($app, $twig){

	// listar tipos
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto tipoPrefeitoDAO
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();

		// links paginacao
		$pagination = new \app\models\Pagination($tipoPrefeitoDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/tipo-prefeito");

		// listar tipos de prefeito
		$tiposPrefeito = $pagination->getObjects();

		$dados = array(
			"title" => "Tipos de Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"tiposPrefeito" => $tiposPrefeito,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/tipo-prefeito/listar.html")->display($dados);
	});

	// renderiza formulário cadastro
	$app->get("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);
		$dados = array(
			"title" => "Novo Tipo de Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/tipo-prefeito/novo.html")->display($dados);
	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$tipoVereadoDAO = new \app\models\TipoPrefeitoDAO();
		$tipoPrefeito = $tipoPrefeitoDAO->buscarPeloId($id);

		$dados = array(
			"title" => "Alterar Tipo de Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"tipoPrefeito" => $tipoPrefeito
		);
		$twig->loadTemplate("admin/tipo-prefeito/alterar.html")->display($dados);
	});

	// cadastrar
	$app->post("/novo", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"tipo-descricao" => "obrigatorio&string"
		);
		$validar = $validation->validar($app->request()->post(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// filtrar os dados
			$post = $validation->filtrar($app->request()->post(), $validacoes);

			// objeto TipoPrefeito
			$tipoPrefeito = new \app\models\TipoPrefeito();
			$tipoPrefeito->setDescricao($post["tipo-descricao"]);

			// objeto TipoPrefeitoDAO
			$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
			$lastIdTipoPrefeito = $tipoPrefeitoDAO->inserir($tipoPrefeito);

			if(is_numeric($lastIdTipoPrefeito) && $lastIdTipoPrefeito > 0)
				$app->redirect("/admin/painel/tipo-prefeito");
			else
				$mensagem = array("erro" => "Erro ao cadastrar tipo de prefeito!");

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Tipo de Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/tipo-prefeito/novo.html")->display(array_merge($dados, $mensagem));

	});

	// alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
			"tipo-descricao" => "obrigatorio"
		);
		$validar = $validation->validar($app->request()->put(), $validacoes);

		// se efetuar todas as validações
		if($validar){

			// objeto TipoPrefeito
			$tipoPrefeito = new \app\models\TipoPrefeito();
			$tipoPrefeito->setId($app->request()->put("tipo-id"));
			$tipoPrefeito->setDescricao($app->request()->put("tipo-descricao"));

			// objeto TipoPrefeitoDAO
			$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();

			if($tipoPrefeitoDAO->alterar($tipoPrefeito))
				$app->redirect("/admin/painel/tipo-prefeito");
			else
				$mensagem = array("erro" => "Erro ao alterar tipo de prefeito!");

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Alterar Tipo de Prefeito | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
		);
		$twig->loadTemplate("admin/tipo-prefeito/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$tipoPrefeitoDAO = new \app\models\TipoPrefeitoDAO();
		if($tipoPrefeitoDAO->deletar($id))
			echo json_encode("deletou");
		else
			echo json_encode("ndeletou");
	});

});