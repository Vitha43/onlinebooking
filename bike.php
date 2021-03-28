<?php
   session_start();
$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'userdata');


$bfrom=$_GET['bfrom'];
$bto=$_GET['bto'];
$bddate=$_GET['bddate'];
$brdate=$_GET['brdate'];
$badult=$_GET['badult'];
$bchildren=$_GET['bchildren'];
$bclass=$_GET['bclass'];
$brtime=$_GET['brtime'];
$bmassage=$_GET['bmassage'];
$bname=$_GET['bname'];
$bnumber=$_GET['bnumber'];
$bemail=$_GET['bemail'];


$query= "insert into bike (bfrom,bto,bddate,brdate,badult,bchildren,bclass,brtime,bmassage,bname,bnumber,bemail)
     values ('$bfrom','$bto','$bddate','$brdate','$badult','$bchildren','$bclass','$brtime','$bmassage','$bname','$bnumber','$bemail') ";
     echo "$query";

     mysqli_query($con, $query);

     header('location:bike.php');

     ?>
