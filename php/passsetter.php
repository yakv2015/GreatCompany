<?php
    session_start();
	require_once($_SERVER['DOCUMENT_ROOT']."/php/dbconnect.php");
	
	$query_select_password = "SELECT hash FROM passwds WHERE login = ?s"; //подготовка запроса на добавление пользователя





?>