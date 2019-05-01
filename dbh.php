<?php


$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="student_advisor";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$connect = new PDO("mysql:host=localhost;dbname=student_advisor", "root", "");

?>