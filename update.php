<?php
include("connect.php");

if(isset($_POST['btn']))
{
	$id =$_POST['btn'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$sql = "UPDATE form SET name='$name', number = '$number' WHERE id='$id'";
	mysqli_select_db($conn,'db_conn');
	$retval = mysqli_query($conn, $sql);
	if(!$retval){
		die('could not update data: ' . mysqli_error($conn));
	}
	echo "Updated data successfully";
mysqli_close($conn);
}
?>
