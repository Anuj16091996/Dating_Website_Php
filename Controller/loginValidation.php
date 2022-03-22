<?php
require_once "functions.php";
require_once "../Model/CustomerTable.php";
require_once "../Model/Images.php";
require_once "../Model/CustomerPrefrence.php";
session_start();

if (!isset($_POST["Submit"])) {
    header('Location: ../View/login.php?error');
}

$userEmail = $_POST['username'];
$userPassword = $_POST['userPass'];
$userDeatils = CustomerTable::CheckIDPassword($userEmail);
$verifyPassword=false;
if($userPassword==$userDeatils[0]["Password"])
    $verifyPassword=true;

if ($verifyPassword) {
    $_SESSION["userEmail"] = $userEmail;
   header('Location: ../View/userhome.php?');
}else{
    header('Location: ../View/login.php?error');
}


