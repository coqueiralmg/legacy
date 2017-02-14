<?php

namespace app\models;
use \PDO;
class Conexao {

	const USERNAME = "camaradepirapo";
	const PASSWD = "plinio123";
	const DBNAME = "camaradepirapo";
	private static $instance = null;

	private static function criarConexao(){
		try{
			if(self::$instance == null){
				$dsn = "mysql:host=mysql01.camaradepiraporamg.hospedagemdesites.ws; dbname=" . self::DBNAME;
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