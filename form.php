<!DOCTYPE html>
<html>
	<head>
		<title>Database Connectivity</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
		<form class="form-horizontal"  action="update.php" method="POST">
			
			<div class="form-group">
				<label class="control-label">Name:</label>
				<input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" required>
			</div> <br>
			<div class="form-group">
				<label class="control-label">Phone No:</label>
				<input type="tel" name ="number" id="number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your Number" class="form-control" required>
			</div><br>
			<div class="form-group">
				<label class="control-label">Email:</label>
				<input type="email" pattern=".+@gmail.com" id="email" name="email" placeholder="Enter Your Email" class="form-control" required>
			</div>
			<div><br>
				<button type="submit" name="btn" class="btn btn-default">Submit</button>
			</div>
		</form>
			</div>
		</div>
		</div>
	<?php
	include("dbtable.php");
	include("update.php");
	?>
	</body>
	</html>