<?php

class MyUserClass
{

	/**
	 | 1. Usei variável privada de classe e constructor pra definir a conexão ao banco de dados por alguns motivos
	 | -- a) Caso haja necessidade da construção de outros métodos, a conexão estará automaticamente instanciada, evitando chamadas repetidas
	 | -- b) Mantém a conexão restrita a classe, uma boa medida de segurança na escrita do código
	 */

	private $dbconn;

	public function __construct()
	{
		$this->dbconn = new DatabaseConnection('localhost','user','password');
	}

	public function getUserList()
	{
		
		$results = $this->dbconn->query('select name from user order by name asc'); // 2. Removi o sort em detrimento da query uma vez que queries são mais rápidas e efetivas, além de encapsular em uma transaction e tornar o código mais enxuto.

 		return $results;
 	}
 }