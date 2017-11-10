<?php

class LogReg {

	private $db;

	function __construct(Database $db){
		$this->db = $db;
	}

	public function login() : array {
		return $this->db->select("SELECT username FROM users");
	}
}