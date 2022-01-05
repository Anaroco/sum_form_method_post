<?php

session_start();


$num1 = $_POST['num1'];
$num1 = $_POST['num2'];

$suma = $num1 + $num2;

$_SESSION['resultado'] = $suma;

header("location: index.php");




?>