<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label for="name"><b>Name: </b></label>
	            <input type="text" name="dname" required><br><br>

	            <label for="did"><b>Department No.(UNIQUE): </b></label>
	            <input type="text" name="did" required><br><br>

	            <label ><b>Website </b></label>
	            <input type="text" name="website" required><br><br>

	            <label for="est_date"><b>Established Date: </b></label>
	            <input type="date" name="est_date" required><br><br>

	            <label ><b>Manager Id: </b></label>
	            <input type="text" name="mgr_id" required><br><br>

	            <label ><b>Manager Start date: </b></label>
	            <input type="date" name="mgr_str_date" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div>
</body>
</html>

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");
 	$dname = mysqli_real_escape_string($connection, $_POST['dname']); // for no SQL injections 
	$did = (int)mysqli_real_escape_string($connection, $_POST['did']);
	$website = mysqli_real_escape_string($connection, $_POST['website']);
	$est_date = mysqli_real_escape_string($connection, $_POST['est_date']);
	$mgr_id = (int)mysqli_real_escape_string($connection, $_POST['mgr_id']);
	$mgr_str_date = mysqli_real_escape_string($connection, $_POST['mgr_str_date']);

	$insert_user_sql = "INSERT INTO DEPT VALUES
	('$dname', $did, '$website', '$est_date', $mgr_id, '$mgr_str_date')";

	if (mysqli_query($connection, $insert_user_sql)) {
    	echo "<br>"."New Department created successfully";
	}
	else {
    	echo "Error: " . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
 }
 ?>