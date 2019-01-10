<?php
		include("connect.php");
		
		$sql = "select * from form";

		if($_POST)
		{
			$name = $_POST['name'];
			$number = $_POST['number'];
			$email = $_POST['email'];
		
		$result = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($result);

		if ($num_rows > 0) 
		// build a table to show results
		{
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>ID</th>"; 
			echo "<th>Name</th>";
			echo "<th>Phone No.</th>"; 
			echo "<th>Email</th>";
			echo "</tr>";
			$num_rows=0;
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['number'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "</tr>";
			}   
			echo "</table>";
		} else{
			echo "No rows returned.";
		}
}
			
		?>