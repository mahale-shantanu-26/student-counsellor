<?php
include 'dbh.php';
session_start();
$id=$_SESSION['user_sid'];
$sql="UPDATE `student` SET status ='offline' WHERE sid = '$id'";
$result=$conn->query($sql);
session_unset();
session_destroy();
header("Location: home.php?logout=success");
?>