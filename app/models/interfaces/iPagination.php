<?php

namespace app\models\interfaces;

interface iPagination {

	public function buscar($limit, $offset);
	public function totalRegistros();

}