<?php

require("db_connect.php");

$employee_id=$_POST['employee_id'];
$employee_fullname=$_POST['employee_fullname'];
$employee_designation=$_POST['employee_designation'];
$employee_gender=$_POST['employee_gender'];
$employee_age=$_POST['employee_age'];
$employee_contact=$_POST['employee_contact'];
$employee_bankname=$_POST['employee_bankname'];
$employee_ifsc=$_POST['employee_ifsc'];
$employee_accno=$_POST['employee_accno'];
$employee_salary=$_POST['employee_salary'];
$employee_address=$_POST['employee_address'];

$sql = 'UPDATE `employee` SET 
 `employee_id`='."'$employee_id'".',
 `employee_fullname`='."'$employee_fullname'".',
 `employee_designation`='."'$employee_designation'".',
 `employee_gender`='."'$employee_gender'".',
 `employee_age`='."'$employee_age'".',
 `employee_contact`='."'$employee_contact'".',
 `employee_bankname`='."'$employee_bankname'".',
 `employee_ifsc`='."'$employee_ifsc'".',
 `employee_accno`='."'$employee_accno'".',
 `employee_salary`='."'$employee_salary'".',
 `employee_address`='."'$employee_address'".'
 Where employee_id="'.$employee_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="employee_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="employee_view.php";
	</script>';
}

//header('location:employee_view.php');

?>