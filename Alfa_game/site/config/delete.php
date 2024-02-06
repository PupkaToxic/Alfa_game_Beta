<?php
session_start();
require_once 'connect.php';


if (!$_SESSION['user']) {
	header('Location: autoris.php');
}

$id = $_GET['id']; // получение айди товара

mysqli_query($link, query:"DELETE FROM `basket` WHERE `basket`.`id` = '$id'"); // запрос на удаление

header('Location: ../basket.php')


?>
