<?php

$servername = "http://192.168.100.10/phpmyadmin/index.php?token=3e6a96354e6efb00f527ed93aff2b2f4";
$dbuser = "phpmyadmin";
$password = "m@rimog93";
$dbname = "kycdb";

//create connection
$conn = mysqli_connect($servername, $dbuser, $password, $dbname);

//check connection
if (mysqli_connect_errno()){

	echo "Failed to Connect: " . mysqli_connect_error();

}

if(isset($_GET['btn-reg'])) {
	$firstname = ($_GET['firstname']);
	$surname = ($_GET['surname']);
	$idnumber = ($_GET['idnumber']);
	$address = ($_GET['address']);
	

	$sql = "INSERT INTO subscriberRegistration (firstname,surname,idnumber,address)
	VALUES ('$firstname','$surname','$idnumber','$address')";

	if ($conn->query($sql) === TRUE) {

		header('Location: rsp.php');

	}else{

		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();



}