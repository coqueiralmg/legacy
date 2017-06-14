<?php

namespace app\models;

class Validation {

	public $errors = array();

	public function validar($data, $validacoes){
		$valido = true;
		// percorre os campos da validação
		foreach($validacoes as $key=>$value){
			// faz explode para dividir a string se for o caso
			$explode = explode('&', $value);
			// verifica se existe validação e filtro e pega o indice correto
			$indice = (isset($explode[0])) ? 0 : 0;

			// se encontrar o :validate na string
			if(is_numeric(strpos($explode[$indice], "validate:"))){
				// remove o :validate da string para pegar os métodos de validação
				$explode[$indice] = str_replace("validate:", "", $explode[$indice]);
				$explodeBarra = explode('|', $explode[$indice]);
				// percorre agora o resultado do explode para executar
				// os métodos de validação
				foreach($explodeBarra as $metodo){
					// pega os parametros passados para os métodos de validação
					$parametros = explode('=', $metodo);
					// pega o parametro no indice 1 porque o indice 0 é o método
					$numero = isset($parametros[1]) ? $parametros[1] : null;
					// pega a posição atual do array para passar pelos métodos
					$post = isset($data[$key]) ? $data[$key] : null;
				
					if(is_string($post)){
						/*
						if(!$this->$parametros[0]($post,$key,$numero)){
							$valido = false;
						}
						*/
					}
				}

			}
		}
		return $valido;
	}

	public function obrigatorio($post,$fieldName){
		$valido=true;
		if(empty($post)){
			$valido=false;
			$aux = explode("-", $fieldName);
			$fieldName = end($aux);
			if(count($aux) > 0){
				$fieldName = "";
				for ($i=1; $i < count($aux); $i++) { 
					$fieldName .= $aux[$i] . " ";
				}
			}
			$this->errors[]='O campo \''.$fieldName.'\' é obrigatório!';
		}
		return $valido;
	}

	public function email($post,$fieldName){
		$valido=true;
		if(!filter_var($post,FILTER_VALIDATE_EMAIL)){
			$aux = explode("-", $fieldName);
			$fieldName = end($aux);
			$this->errors[]='Digite um e-mail válido no campo \''.$fieldName.'\'';
			$valido=false;
		}
		return $valido;
	}

	public function cep($post,$fieldName){
		$valido=false;
		$er='/^[0-9]{5}\-[0-9]{3}$/';
		if(preg_match($er,$post)){
			$valido=true;
		}
		return $valido;
	}

	public function number($post){
		return is_numeric($post);
	}

   public function maxlength($valor, $fieldName, $paramentros = NULL) {
        if (strlen($valor) < $paramentros):
            $valido = false;
            $this->errors[] = 'O campo ' . strtoupper($fieldName) . ' deve ter no máximo ' . $paramentros . ' caracteres.';
        else:
            $valido = true;
        endif;
        return $valido;
    }

    public function unique($valor, $fieldName,$parametros=null) {
        $dados = explode('.', $paramentros);
        $lixo1 = $this->model->metodoVerificarRegistroVindoDoModelAppModel($dados[0],$dados[1]);
        if (count($lixo1) > 0):
            $valido = false;
            $this->errors[] = 'O campo ' . strtoupper($fieldName) . ' esta com o valor duplicado.';
        else:
            $valido = true;
        endif;
    }

	public function mostrarErros(){
		$erros=$this->errors;
		$html= '<ul id="listar-erros">';
		foreach ($erros as $erro) {
			$html.= '<li class="erro">'.$erro.'</li>';
		}
		$html.= '</ul>';
		return $html;
	}

	/*public function filtrarCampos($post){
		foreach ($post as $key=>$value) {
			$post[$key] = strip_tags(filter_var($post[$key], FILTER_SANITIZE_STRING));
		}
		return $post;
	}*/

	public function filtrar($data, $filtros){
		// percorre array de filtros
		foreach ($filtros as $key => $value) {
			// faz explode para dividir a string se for o caso
			$explode = explode('&', $value);
			// verifica se existe validação e filtro e pega o indice correto
			$indice = (isset($explode[1])) ? 1 : 0;

			// se encontrar o :filter na string
			if(is_numeric(strpos($explode[$indice], "filter:"))){
				// remove o :filter da string para pegar os métodos de validação
				$explode[$indice] = str_replace("filter:", "", $explode[$indice]);
				if($filtros[$key] != ""){
					//$filtrosExplode = (isset($explode[$indice])) ? $explode[$indice] : $value;
					$filtrosExplode = explode('|', $explode[$indice]);
					foreach ($filtrosExplode as $metodo) {
						$metodo = "filter" . ucfirst($metodo); // filterMetodo
						$data[$key] = $this->$metodo($data[$key]);
					}
				}
			}
		}
		return $data;
	}

	public function filterString($input){
		return strip_tags(filter_var($input, FILTER_SANITIZE_STRING));
	}

	public function filterSlashes($input){
		return addslashes($input);
	}

	public function filterNumber($input){
		return strip_tags(filter_var($input, FILTER_SANITIZE_NUMBER_INT));
	}
	
}