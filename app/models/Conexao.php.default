<?php

namespace app\models;
use \PDO;
class Conexao {

	const HOST = "localhost";
	const USERNAME = "root";
	const PASSWD = "123456";
	const DBNAME = "coqueiralmg";
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