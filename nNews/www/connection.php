<?php

$host = 'localhost'; // адрес сервера 
$database = 'news'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link= mysqli_connect($host, $user, $password, $database)
or die ( mysql_error($link));

mysqli_query($link, "SET NAMES 'utf8'");






?>