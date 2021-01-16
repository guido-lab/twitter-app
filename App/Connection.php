<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=host;dbname=db_name;charset=utf8",
				"user",
				"password" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>
