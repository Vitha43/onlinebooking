<?php
session_start();
include("config1.php");
extract($_POST);
$mysqli= "INSERT INTO 'contactdata' ('firstname', 'lastname', 'phone', 'email', 'message') VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($mysqli);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>
