<?php  ob_start();
$connection = mysqli_connect('localhost','root','shrriamadvih2019!','jarvis');

$connect = new PDO("mysql:host=localhost;dbname=jarvis", "root", "shrriamadvih2019!");

$link=mysqli_connect("localhost","root","shrriamadvih2019!");
mysqli_select_db($link,"jarvis");
?>