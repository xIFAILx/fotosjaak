<?php
require_once 'config/config.php';
class MySqlDatabaseClass {
	//Fields
	private $db_connection;

	/*dit is de constructor van de MySqlDatabaseClass
	 *Een constructor herken je in PHP aan de naam. de naam is altijd __construct
	 */
	public function __construct() {
		//Velden roep je aan met $this->naam_van_het_veld_zonder_$
		// Er wordt hier een verbinding gemaakt met de mysql server
		$this -> db_connection = mysql_connect(SERVERNAME, USERNAME, PASSWORD);

		mysql_select_db(DATABASE, $this -> db_connection) or die('MysqlDatabaseClass, database niet geselecteerd');
	}

	public function fire_query($query) { $result = mysql_query($query) or die('MySqlDatabase: ' . mysql_error());
		return $result;
	}

}

$database = new MySqlDatabaseClass();
?>