<?php
	include_once 'connect.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "INSERT INTO USER(username, password) VALUES ('$user', '$pass');";
	$result = mysqli_query($conn, $sql);

	header("Location: accountlogin.html?signup=success");
?>
