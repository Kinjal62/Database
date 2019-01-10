<?php

//Create Connection
		$conn = mysqli_connect("localhost","root","","db_conn");
		if (!$conn)
		{
			die("connection failed: " . mysqli_connect_error());
		} 

	?>