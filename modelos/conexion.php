<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=sql175.main-hosting.eu.;dbname=u881670891_confe",
						"u881670891_conad",
						"22101919Dmd",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}

}
