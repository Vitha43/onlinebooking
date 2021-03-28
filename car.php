<?php
session_start();
$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'userdata');


$cfrom=$_GET['cfrom'];
$cto=$_GET['cto'];
$cddate=$_GET['cddate'];
$crdate=$_GET['crdate'];
$cadult=$_GET['cadult'];
$cchildren=$_GET['cchildren'];
$ctclass=$_GET['ctclass'];
$crtime=$_GET['crtime'];
$cmessage=$_GET['cmessage'];
$cname=$_GET['cname'];
$cnumber=$_GET['cnumber'];
$cemail=$_GET['cemail'];


$query= "insert into car (cfrom,cto,cddate,crdate,cadult,cchildren,ctclass,crtime,cmessage,cname,cnumber,cemail)
     values ('$cfrom','$cto','$cddate','$crdate','$cadult','$cchildren','$ctclass','$crtime','$cmessage','$cname','$cnumber','$cemail') ";
     echo "$query";

     mysqli_query($con, $query);

     header('location:car.php');

     ?>
