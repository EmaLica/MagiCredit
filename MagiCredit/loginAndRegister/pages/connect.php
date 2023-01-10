<?php
$con = mysqli_connect('localhost', 'root', '','bankapp');

$username = $_POST['username'];
$password = $_POST['password'];

//inserimento nel db in sql
$sql = "INSERT INTO `registration` (`id`, `username`, `password`) VALUES ('0', '$username', '$password')";

//inserimento nel db
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Dati inseriti con successo";
}

?>