<?php
session_start();
$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'userdata');


$afrom=$_GET['afrom'];
$ato=$_GET['ato'];
$addate=$_GET['addate'];
$adtime=$_GET['adtime'];
$apline=$_GET['apline'];
$apseating=$_GET['apseating'];
$aadult=$_GET['aadult'];
$achildren=$_GET['achildren'];
$ardate=$_GET['ardate'];
$artime=$_GET['artime'];
$amassage=$_GET['amassage'];
$aname=$_GET['aname'];
$anumber=$_GET['anumber'];
$aemail=$_GET['aemail'];



$query= "insert into air (afrom,ato,addate,adtime,apline,apseating,aadult,achildren,ardate,artime,amassage,aname,anumber,aemail)
     values ('$afrom','$ato','$addate','$adtime','$apline','$apseating','$aadult','$achildren','$ardate','$artime','$amassage','$aname','$anumber','$aemail') ";
     echo "$query";

     mysqli_query($con, $query);

     header('location:index.php');

     ?>
