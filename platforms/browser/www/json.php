
<?php

include "dbconnect.php";

$data = array();

$sql = mysqli_query($con, "select * from subscriberRegistration");

while ($row=mysqli_fetch_object($sql)){
	$data[] = $row;
}

echo json_encode($data);