<?php

$app->group("/admin/painel/usuario", function() use($app, $twig){

	// listar
	$app->get("(/page/:page(/limit/:limit))", function($page=null, $limit=null) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		// pega pagina atual correta e limite
		$pagina = ($page != null) ? $page : 1;
		$limite = ($limit != null) ? $limit : 10;

		// objeto usuarioDAO
		$usuarioDAO = new \app\models\UsuarioDAO();

		// objeto pagination
		$pagination = new \app\models\Pagination($usuarioDAO, $limite, $pagina);
		$pagination->setUrl("/admin/painel/usuario");

		// listar usuarios
		$usuarios = $pagination->getObjects();

		$dados = array(
			"title" => "Usuários | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"usuarios" => $usuarios,
			"pagination" => $pagination
		);
		$twig->loadTemplate("admin/usuario/listar.html")->display($dados);
	});

	$app->get("/novo", function() use($app, $twig) {

		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$dados = array(
			"title" => "Novo Usuário | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"]
		);
		$twig->loadTemplate("admin/usuario/novo.html")->display($dados);

	});

	// renderiza formulário alteração
	$app->get("/alterar/:id", function($id) use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		$usuarioDAO = new \app\models\UsuarioDAO();
		$usuario = $usuarioDAO->buscarPeloId($id);

		$dados = array(
			"title" => "Alterar Usuário | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"usuario" => $usuario
		);
		$twig->loadTemplate("admin/usuario/alterar.html")->display($dados);
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

			// filtrar os dados
			$post = $validation->filtrar($app->request()->post(), $validacoes);

			// objeto pessoa
			$pessoa = new \app\models\Pessoa();
			$pessoa->setNome($post["pessoa-nome"]);
			$pessoa->setApelido($post["pessoa-apelido"]);
			// data nascimento
			$expData = explode("/", $post["pessoa-data-nascimento"]);
			$pessoa->setDataNascimento($expData[2]."-".$expData[1]."-".$expData[0]);

			// objeto usuario
			$usuario = new \app\models\Usuario();
			$usuario->setUsuario($post["usuario-usuario"]);
			$usuario->setEmail($post["usuario-email"]);
			$usuario->setSenha(sha1($post["usuario-senha"]));
			$usuario->setAtivo($post["usuario-ativo"]);
			$usuario->setNivel($post["usuario-nivel"]);
			$usuario->setPessoa($pessoa);

			// objeto usuarioDAO
			$usuarioDAO = new \app\models\UsuarioDAO();
			$lastIdUsuario = $usuarioDAO->inserir($usuario, $ativarTransaction=true);

			if(is_numeric($lastIdUsuario) && $lastIdUsuario > 0){
				$app->redirect("/admin/painel/usuario");
			}else
				$mensagem = array("erro" => "Erro ao cadastrar usuário!");

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Usuário | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->post() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/usuario/novo.html")->display(array_merge($dados, $mensagem));

	});

	// put alterar
	$app->put("/alterar", function() use($app, $twig) {
		\app\models\Sessao::verificarSessao($app);
		\app\models\Sessao::restringirAcesso($twig);

		/*echo "<pre>";
		print_r($app->request()->post());
		echo "</pre>";*/

		// objeto usuarioDAO
		$usuarioDAO = new \app\models\UsuarioDAO();
		$usuarioAntigo = $usuarioDAO->buscarPeloId($app->request()->put("usuario-id"));

		// faz as validações de formulário
		$validation = new \app\models\Validation();
		$validacoes = array(
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

			// filtrar os dados
			$put = $validation->filtrar($app->request()->put(), $validacoes);

			// objeto pessoa
			$pessoa = new \app\models\Pessoa();
			$pessoa->setId($put["pessoa-id"]);
			$pessoa->setNome($put["pessoa-nome"]);
			$pessoa->setApelido($put["pessoa-apelido"]);
			// data nascimento
			$expData = explode("/", $put["pessoa-data-nascimento"]);
			$pessoa->setDataNascimento($expData[2]."-".$expData[1]."-".$expData[0]);

			// objeto usuario
			$usuario = new \app\models\Usuario();
			$usuario->setId($put["usuario-id"]);
			$usuario->setUsuario($put["usuario-usuario"]);
			$usuario->setEmail($put["usuario-email"]);
			$usuario->setSenha((empty($put["usuario-senha"])) ? $usuarioAntigo->getSenha() : sha1($put["usuario-senha"]) );
			$usuario->setAtivo($put["usuario-ativo"]);
			$usuario->setNivel($put["usuario-nivel"]);
			$usuario->setPessoa($pessoa);

			if($usuarioDAO->alterar($usuario, $ativarTransaction=true)){
				$app->redirect("/admin/painel/usuario");
			}else
				$mensagem = array("erro" => "Erro ao alterar usuário!");

		}else{
			$mensagem = array("erro" => $validation->mostrarErros());
		}

		// se não validou, renderiza página novamente, mas com o erro
		$dados = array(
			"title" => "Novo Usuário | ",
			"usuarioNome" => $_SESSION["usuarioNome"],
			"usuarioNivel" => $_SESSION["usuarioNivel"],
			"dados" => $app->request()->put() // retorna dados para não ter que digitar novamente
		);
		$twig->loadTemplate("admin/usuario/alterar.html")->display(array_merge($dados, $mensagem));

	});

	// deletar
	$app->delete("/deletar/:id", function($id) use($app) {
		$usuarioDAO = new \app\models\UsuarioDAO();
		if($usuarioDAO->deletar($id, $ativarTransaction=true))
			echo json_encode("deletou");
		else
			echo json_encode("ndeletou");
	});

});