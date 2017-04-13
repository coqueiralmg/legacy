<?php

namespace app\models;
use \PDO;

class ConcursoDAO implements \app\models\interfaces\iPagination {
    
    private $conexao;
	private $tabela;

	public function __construct(){
		$this->conexao = \app\models\Conexao::getDB();
		$this->tabela = "concurso";
	}

	public function inserir(\app\models\Concurso $concurso){

	}

	public function alterar(\app\models\Concurso $concurso){

	}

	public function deletar($id){

	}

	public function buscar($limit=-1, $offset=-1){
		
	}

	public function buscarPeloId($id){

	}

	public function totalRegistros($somenteAtivos=false){
		
	}
}