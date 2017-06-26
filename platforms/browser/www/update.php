
<?php
include "dbconnect.php";

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$idnumber = $_POST['idnumber'];
	$address = $_POST['address'];

	$sql = mysqli_query($con, "UPDATE subscriberRegistration SET firstname='$firstname',surname='$surname',idnumber='$idnumber',address='$address' where id='$id'");

	if($sql){
		echo "success";
		else
			echo "error";
	}
}