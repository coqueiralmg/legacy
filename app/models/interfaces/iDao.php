<?php

namespace app\models\interfaces;

interface iDao {

	public function inserir(\Object $object);
	public function alterar($object);
	public function deletar($id);
	public function buscar();
	public function buscarPeloId($id);

}