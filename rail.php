<?php
session_start();
$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'userdata');


$rfrom=$_GET['rfrom'];
$rto=$_GET['rto'];
$rddate=$_GET['rddate'];
$rrdate=$_GET['rrdate'];
$radult=$_GET['radult'];
$rchildren=$_GET['rchildren'];
$rtclass=$_GET['rtclass'];
$rrtime=$_GET['rrtime'];
$rmassage=$_GET['rmassage'];
$rname=$_GET['rname'];
$rnumber=$_GET['rnumber'];
$remail=$_GET['remail'];


$query= "insert into rail (rfrom,rto,rddate,rrdate,radult,rchildren,rtclass,rrtime,rmassage,rname,rnumber,remail)
     values ('$rfrom','$rto','$rddate','$rrdate','$radult','$rchildren','$rtclass','$rrtime','$rmassage','$rname','$rnumber','$remail') ";
     echo "$query";

     mysqli_query($con, $query);

     header('location:rail.php');

     ?>
