<?php  ob_start();
$connection = mysqli_connect('localhost','root','','jarvis');

$connect = new PDO("mysql:host=localhost;dbname=jarvis", "root", "");

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"jarvis");
?>