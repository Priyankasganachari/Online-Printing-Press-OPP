<?php

require("db_connect.php");


$customer_details_id=$_REQUEST['id'];

$sql = 'DELETE FROM `customer_details` Where customer_details_id="'.$customer_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="customer_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="customer_details_view.php";
	</script>';
}

//header('location:customer_details_view.php');

?>