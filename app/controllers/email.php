<?php

$app->post("/email/enviar", function() use($app){

	// validation
	$validation = new \app\models\Validation();
	$validacoes = array(
		"secretaria-id"	=> "filter:number",
		"nome"			=> "filter:string",
		"email"			=> "filter:string",
		"telefone"		=> "filter:string",
		"endereco"		=> "filter:string",
		"assunto"		=> "filter:string",
		"mensagem"		=> "filter:string"
	);

	// filtrar os dados
	$post = $validation->filtrar($app->request()->post(), $validacoes);

	if(filter_var($post["email"], FILTER_VALIDATE_EMAIL)){

		// objeto SecretariaDAO
		$secretariaDAO = new \app\models\SecretariaDAO();
		$secretaria = $secretariaDAO->buscarPeloId($post["secretaria-id"]);
		
		// objeto email
		$email = new \app\models\Email();
		$email->setDestinatario($secretaria);
		$email->setRemetente($post["nome"]);
		$email->setEmailRemetente(filter_var($post["email"], FILTER_SANITIZE_EMAIL));
		$email->setTelefoneRemetente($post["telefone"]);
		$email->setEnderecoRemetente($post["endereco"]);
		$email->setAssunto($post["assunto"]);
		$email->setMensagem($post["mensagem"]);

		echo ($email->enviar()) ? json_encode('enviou') : json_encode('nenviou');

	}else{
		echo json_encode("nemail");
	}
	

});

$app->post("/fale-prefeitura/enviar", function() use($app){

	// validation
	$validation = new \app\models\Validation();
	$validacoes = array(
		"nome"			=> "filter:string",
		"email"			=> "filter:string",
		"telefone"		=> "filter:string",
		"assunto"		=> "filter:string",
		"mensagem"		=> "filter:string"
	);

	// filtrar os dados
	$post = $validation->filtrar($app->request()->post(), $validacoes);

	if(filter_var($post["email"], FILTER_VALIDATE_EMAIL)){
		
		// objeto email
		$email = new \app\models\Email();
		$email->setRemetente($post["nome"]);
		$email->setEmailRemetente(filter_var($post["email"], FILTER_SANITIZE_EMAIL));
		$email->setTelefoneRemetente($post["telefone"]);
		$email->setAssunto($post["assunto"]);
		$email->setMensagem($post["mensagem"]);

		if($email->enviarContato()){
			$app->redirect("/fale-sucesso");
		} else {
			header('Content-type: application/json');

			$status = array(
				'type'=>'error',
				'message'=>'Ocorreu um erro ao enviar mensagem.'
			);
		}
		
	}else{
		echo json_encode("nemail");
	}
	

});