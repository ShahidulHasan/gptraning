<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shahidul
 *
 * @author shanto
 */

class ShahidulCon {
	var $db_connection;
	var $query;
	var $db;

	//
	// This function opens a connection with the mysql database
	// 
	function db($host, $user, $passwd, $database)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $passwd;
		$this->database = $database;

		$this->db_connection = mysql_pconnect($this->host, $this->user, $this->pass) or die(mysql_error());

		if($this->db_connection)
		{
			$this->database = $database;
			$dbselect = mysql_select_db($this->database) or die(mysql_error());
                        //	mssql_query('SET CHARACTER SET utf8');
                        //	mssql_query("SET SESSION collation_connection ='utf8_general_ci'") or die (mssql_error()); 
			return $this->db_connection;
			return "success";
		}
		else
		{
			return "error";
		}
	}
	
}

?>
