<?php
		$serverName = "10.87.75.125";
		$userName = "KKUITADMIN";
		$userPassword = "p@ssw0rd";
		$dbName = "HealthObject";
		$connectionInfo = array(
			"Database"=>$dbName, 
			"UID"=>$userName, 
			"PWD"=>$userPassword, 
			"MultipleActiveResultSets"=>True,
			"CharacterSet"  => 'UTF-8',
			//"Encrypt"=>True,
			"TrustServerCertificate"=>True
		);
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
		if( $conn === false ) 
		{
			die( print_r(sqlsrv_errors(), true));
		}

?>