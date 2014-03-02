<?php
		$username="root";
		$server="localhost";
		$password="sahil";
		$database="purplle";
		$db=mysql_connect($server,$username,$password);
		
		if(!$db){
			die("Database connection fail".mysql_error());
		}
		$db_select=mysql_select_db($database,$db);
		if(!$db_select){
			die("Database selection fail".mysql_error());
		}
?>
