
<?php

include "dbconnect";

if(isset($_POST['insertsubReg'])){

	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$idnumber = $_POST['idnumber'];
	$address = $_POST['address'];

	$sql=mysqli_query($con, "INSERT INTO subscriberRegistration (firstname,surname,idnumber,address) VALUES ('$firstname','$surname','$idnumber','$address')");

	if($sql)
		echo "Success";
	else
		echo "Connection error";
        
}