<?php
	$username = $_POST['username'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','record1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Registration(username, gender, email, password, ) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $username,  $gender, $email, $password, );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>