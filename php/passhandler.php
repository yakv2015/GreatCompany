<?php
    session_start();
	require_once($_SERVER['DOCUMENT_ROOT']."/php/dbconnect.php");

// if(empty($_POST['enter']) || !isset($_POST['enter'])) {header("Location: ".$address_site."/php/authorization.php"); exit;}

	if (isset($_POST['login'])) {$login = (string)$_POST['login'];}

	/*
	Проверяем была ли отправлена форма, то есть была ли нажата кнопка Войти. Если да, то идём дальше, если нет, то выведем пользователю сообщение об ошибке, о том что он зашёл на эту страницу напрямую.
	*/
	if(isset($_POST['enter']) && !empty($_POST['enter'])){


		$password = trim($_POST['password']); 
		$password = htmlspecialchars($password, ENT_QUOTES); 

		$query_select_password = "SELECT hash FROM passwds WHERE login = ?s"; //подготавливаем запрос

		// проверяю, введён ли пароль
		if(isset($_POST['password']) && !empty($_POST['password'])) {

			$row = $db->query($query_select_password, $login);
			$row_password = mysqli_fetch_array($row);

				if ($password === $row_password[0]) {
					$_SESSION['admin'] = true;
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: ".$address_site."/php/ok.php");
					
				} else {

					// Сохраняем в сессию сообщение об ошибке цикла проверки пароля
					$_SESSION["error_messages"] .= "<p class='mesage_error'>Пароль не торт</p>";

					//Возвращаем пользователя на страницу регистрации
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: ".$address_site."/php/notok.php");


					//Закрываем подключения и останавливаем скрипт
					$query_select_password->close();
					$mysqli->close();
					exit();
				}


		} else {

			// Сохраняем в сессию сообщение о том, что пароль не введён
			$_SESSION["error_messages"] .= "<p class='mesage_error' >Пароль не введён</p>";

			//Возвращаем пользователя на страницу регистрации
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: ".$address_site."/index.html");

			///Закрываем подключения и останавливаем скрипт
			$query_select_password->close();
			$mysqli->close();
			exit();
		}

	} else {

		if(!$_SESSION['admin']) {header("Location: ".$address_site."/php/authorization.php"); exit;}	


		("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
		exit();
	}

