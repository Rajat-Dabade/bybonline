<?php

	class Database{
		private $dbhost = "127.0.0.1";
		private $dbuser = "root";
		private $dbpass = "";
		private $dbname = "bake";

		public function getConnection(){
			$conn = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $conn;
		}
	}