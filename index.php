<?php

require "config.php";
require "loggies.php";

// site
require ROOT . "app/controllers/home.php";
require ROOT . "app/controllers/secretaria.php";
require ROOT . "app/controllers/prefeitura.php";
require ROOT . "app/controllers/noticia.php";
require ROOT . "app/controllers/video.php";
require ROOT . "app/controllers/licitacao.php";
require ROOT . "app/controllers/publicacao.php";
require ROOT . "app/controllers/busca.php";
require ROOT . "app/controllers/email.php";
require ROOT . "app/controllers/jornal.php";
require ROOT . "app/controllers/especial.php";
require ROOT . "app/controllers/cidade.php";

// admin
require ROOT . "app/controllers/admin/login.php";
require ROOT . "app/controllers/admin/home.php";
require ROOT . "app/controllers/admin/secretaria.php";
require ROOT . "app/controllers/admin/partido.php";
require ROOT . "app/controllers/admin/tipoPrefeito.php";
require ROOT . "app/controllers/admin/usuario.php";
require ROOT . "app/controllers/admin/video.php";
require ROOT . "app/controllers/admin/noticia.php";
require ROOT . "app/controllers/admin/banner.php";
require ROOT . "app/controllers/admin/licitacao.php";
require ROOT . "app/controllers/admin/publicacao.php";
require ROOT . "app/controllers/admin/uploadLegislacoes.php";
require ROOT . "app/controllers/admin/destaque.php";

$app->run();