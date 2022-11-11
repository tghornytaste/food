<?php
	$firstName = $_POST['productname'];
	$lastName = $_POST['quantity'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into productdatabase(productname, quantity) values(?, ?)");
		$stmt->bind_param("si", $productname, $quantity);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}