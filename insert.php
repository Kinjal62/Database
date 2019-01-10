<?php 
		
 		include("connect.php");
		//Select Database
		$db_select = mysqli_select_db($conn, "db_conn");
		if(!$db_select){
			die("Database selection failed" . mysqli_connect_error());
		}

		if($_POST)
		{
			$name = $_POST['name'];
	 		$number = $_POST['number'];
	 		$email = $_POST['email'];

			$sql = "INSERT INTO form (name, number, email) VALUES ('$name','$number','$email')";
		
		if($conn->query($sql) === TRUE)
		{
			echo "New record created successfully";
		}
		else{
			echo "Error: ". $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
	?>
