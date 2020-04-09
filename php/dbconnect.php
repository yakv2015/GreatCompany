<?php

    include ($_SERVER['DOCUMENT_ROOT']."/php/safemysql.class.php");

    // $db = new SafeMySQL(); // with default settings

    $opts = array(
       'user'    => 'root',
       'pass'    => '',
       'db'      => 'great_comp',
       'charset' => 'utf8mb4'
     );
    $db = new SafeMySQL($opts); // изменяем дефолтные параметры подключения

    // Проверяем, успешность соединения.
    if (mysqli_connect_errno()) {
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit();
       }

    //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://greatcompany";
?>