<?php

namespace app\models;
use \PDO;
class Conexao {

	const HOST = "coqueiral.mg.gov.br";
	const USERNAME = "coqueira_pref";
	const PASSWD = "paradoxo-3241";
	const DBNAME = "coqueira_prefeitura";
	private static $instance = null;

	private static function criarConexao(){
		try{
			if(self::$instance == null){
				$dsn = "mysql:host=" . self::HOST . "; dbname=" . self::DBNAME;
				self::$instance = new PDO($dsn, self::USERNAME, self::PASSWD);
				self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		return self::$instance;
	}

	public static function getDB(){
		return self::criarConexao();
	}

}