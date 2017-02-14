<?php

namespace app\models;

class Sessao {

	public static function iniciarSessao(\app\models\Usuario $usuario){

		// objeto log
		$log = new \app\models\Log();
		$log->setUsuario($usuario);
		$log->setData(date("Y-m-d H:i:s"));

		// objeto logDAO
		$logDAO = new \app\models\LogDAO();

		// se conseguir inserir o log no banco de dados
		if($logDAO->inserir($log)){
			$_SESSION["usuarioId"] = $usuario->getId();
			$_SESSION["usuarioNome"] = $usuario->getPessoa()->getNome();
			$_SESSION["usuarioNivel"] = $usuario->getNivel();
			$_SESSION["usuarioLogado"] = true;
			return true;
		}

		// se não inserir log no db
		return false;
		
	}

	public static function verificarSessao($app){
		if(!isset($_SESSION["usuarioLogado"]))
			$app->redirect("/admin");
	}

	public static function logout($app){
		unset($_SESSION["usuarioId"]);
		unset($_SESSION["usuarioNome"]);
		unset($_SESSION["usuarioNivel"]);
		unset($_SESSION["usuarioLogado"]);
		$app->redirect("/admin");
	}

	public static function restringirAcesso($twig){
		if($_SESSION["usuarioNivel"] != 2){
			$dados = array(
				"usuarioNome" => $_SESSION["usuarioNome"]
			);
			$twig->loadTemplate("admin/403.html")->display($dados);
			exit();
		}
	}

}