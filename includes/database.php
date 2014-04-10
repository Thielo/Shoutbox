<?php

	// Herstellen der Datenbankverbindung
	$db = array('user' => '', 'pw' => '', 'db' => '');
	$db = new PDO('mysql:host=localhost;dbname='.$db['db'],$db['user'],$db['pw']);

?>