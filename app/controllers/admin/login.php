<?php

$app->get("/admin", function() use($twig) {
	$twig->loadTemplate("login.html")->display(array());
});

$app->get("/admin/", function() use($twig) {
	$twig->loadTemplate("login.html")->display(array());
});

$app->post("/admin/logar", function() use($app) {

	// pega e filtra campos post
	$login = trim(filter_var($app->request()->post("login"), FILTER_SANITIZE_STRING));
	$senha = trim(filter_var($app->request()->post("senha"), FILTER_SANITIZE_STRING));

	// usuarioDAO
	$usuarioDAO = new \app\models\UsuarioDAO();

	// faz procedimento de login
	if(($usuario = $usuarioDAO->logar($login, sha1($senha))) != null){
		if(\app\models\Sessao::iniciarSessao($usuario))
			echo json_encode("logou");
		else
			echo json_encode("nsessao");
	}else
		echo json_encode("nlogou");

});