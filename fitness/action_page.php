<?php

session_start();

$_SESSION['user'] = $_POST;

$name = $_POST["name"];
$age = $_POST["age"];
$gender  = $_POST['gender'];
$height  = (float) $_POST['height'];
$weight  = (float) $_POST['Weight'];
$exercise  = $_POST['exercise'];
$blood_pressure  = $_POST['blood_pressure'];

$bmi = $weight/(float)($height*$height);

// var_dump($weight);
$conn = mysqli_connect('localhost', 'root', '0000', 'arhind');

$query = "select * from IRM2 where bp_start < '$blood_pressure' and bp_end > '$blood_pressure' and bmi_start < '$bmi' and bmi_end > '$bmi'";

$result = $conn->query($query);

$row = $result->fetch_assoc();

$_SESSION['result'] = $row;
$_SESSION['result']['bmi'] = $bmi;

header('Location: proj1/index.php');