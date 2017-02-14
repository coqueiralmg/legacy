<?php

$app->get("/admin/painel/legislacao/multiple-upload", function() use($app, $twig){

	\app\models\Sessao::verificarSessao($app);
	\app\models\Sessao::restringirAcesso($twig);

	$dados = array(
		"title" => "Upload Múltiplo de Legislações | ",
		"usuarioNome" => $_SESSION["usuarioNome"],
		"usuarioNivel" => $_SESSION["usuarioNivel"]
	);
	$twig->loadTemplate("admin/legislacao/multiple-upload.html")->display($dados);

});

$app->post("/admin/painel/legislacao/multiple-upload", function() use($app, $twig){

	\app\models\Sessao::verificarSessao($app);
	\app\models\Sessao::restringirAcesso($twig);

	// total arquivos
	$totalArquivos = count($_FILES["legislacao-arquivos"]["name"]);

	// objeto file
	$file = new \app\models\File();
	$file->setFolder("public/storage/legislacao-arquivo/");

	// $extensoes permitidas
	$extensoesPermitidas = array("pdf", "doc", "docx");

	// total arquivos upados
	$arquivosUpados = 0;

	// loop
	for ($i=0; $i < $totalArquivos; $i++) {

		$fileInfo = new SplFileInfo($_FILES["legislacao-arquivos"]["name"][$i]);

		if(in_array($fileInfo->getExtension(), $extensoesPermitidas)){

			// numero do arquivo
			$uniqId = uniqid();

			// dados do arquivo
			$tmpName = $_FILES["legislacao-arquivos"]["tmp_name"][$i];
			$newName = $uniqId . "." . $fileInfo->getExtension();
			$folder = "public/storage/legislacao-arquivo/";

			if(move_uploaded_file($tmpName, $folder . $newName)){

				$baseName = $fileInfo->getBaseName(".".$fileInfo->getExtension());

				// objeto legislacao
				$legislacao = new \app\models\Legislacao();
				$legislacao->setTitulo($baseName);
				$legislacao->setDescricao("<p>{$baseName}</p>");
				$legislacao->setData(date("Y-m-d H:i:s"));
				$legislacao->setArquivo($folder . $newName);
				$legislacao->setNumero($uniqId);
				$legislacao->setAtivo(1);

				// objeto legislacaoDAO
				$legislacaoDAO = new \app\models\LegislacaoDAO();
				$lastIdLegislacao = $legislacaoDAO->inserir($legislacao);

				if(is_numeric($lastIdLegislacao) && $lastIdLegislacao > 0){
					$arquivosUpados++;
				}
			}

		}

	}

	$dados = array(
		"title" => "Upload Múltiplo de Legislações | ",
		"usuarioNome" => $_SESSION["usuarioNome"],
		"usuarioNivel" => $_SESSION["usuarioNivel"],
		"mensagem" => $arquivosUpados . " arquivos foram upados com sucesso!"
	);
	$twig->loadTemplate("admin/legislacao/multiple-upload.html")->display($dados);


});