<?php
//require_once "db_conn.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_php";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
//echo "Connected successfully";