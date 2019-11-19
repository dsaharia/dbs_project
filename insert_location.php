<!DOCTYPE html>
<html>
<head>
	<title>Location</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label ><b>Street Name: </b></label>
	            <input type="text" name="sname" required><br><br>

	            <label ><b>Location ID.(UNIQUE): </b></label>
	            <input type="text" name="lid" required><br><br>

	            <label ><b>Building Name: </b></label>
	            <input type="text" name="b_name" required><br><br>

	            <label ><b>City: </b></label>
	            <input type="text" name="city" required><br><br>

	            <label ><b>Postal: </b></label>
	            <input type="text" name="postal" required><br><br>

	            <label ><b>Country: </b></label>
	            <input type="text" name="country" required><br><br>

	            <label ><b>Department Id: </b></label>
	            <input type="text" name="did" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div> 
</body>
</html>

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$connection = mysqli_connect('localhost', 'root', '', 'dbs_project') or die("Could Not connect to DB");
 	$sname = mysqli_real_escape_string($connection, $_POST['sname']); // for no SQL injections 
	$lid = (int)mysqli_real_escape_string($connection, $_POST['lid']);
	$b_name = mysqli_real_escape_string($connection, $_POST['b_name']);
	$city = mysqli_real_escape_string($connection, $_POST['city']);
	$postal = (int)mysqli_real_escape_string($connection, $_POST['postal']);
	$country = mysqli_real_escape_string($connection, $_POST['country']);
	$did = (int)mysqli_real_escape_string($connection, $_POST['did']);

	$insert_user_sql = "INSERT INTO LOCATION VALUES
	( $lid,'$sname', '$b_name', '$city', $postal, '$country', $did)";

	if (mysqli_query($connection, $insert_user_sql)) {
    	echo "<br>"."New Location created successfully";
	}
	else {
    	echo "Error: " . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
 }
 ?>