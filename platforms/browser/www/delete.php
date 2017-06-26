
<?php

include "dbconnect.php";

if(isset($_POST['id'])){

	id = $_GET['id'];

	$sql = mysqli_query($con, "delete from subscriberRegistration where id='$id'");

	if($sql){
		echo "success";

	else
		echo "error";
	}


}