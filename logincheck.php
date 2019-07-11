<?php
	include_once 'connect.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysql_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysql_fetch_assoc($result)) {
			echo $row['username'] ;
		/*header('Location: ./home.html');*/
		}
	}
	else{
		echo"Please enter correct details !!!";
		header('Location: ./accountlogin.html');
	}

?>