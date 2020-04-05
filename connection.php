<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="farm_tot";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$con = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

?>

