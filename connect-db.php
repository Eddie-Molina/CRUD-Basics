<?php
	$server = 'localhost';
	$user = 'root';
	$pass = 'root';
	$db = 'records2';

	$mysqli = new mysqli($server, $user, $pass, $db);

	mysqli_report(MYSQLI_REPORT_ERROR);
?>