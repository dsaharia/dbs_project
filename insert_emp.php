<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label for="fname"><b>First name: </b></label>
	            <input type="text" name="fname" required><br><br>

	            <label for="lname"><b>Last name: </b></label>
	            <input type="text" name="lname" required><br><br>

	            <label for="mname"><b>Middle Initial: </b></label>
	            <input type="text" name="mname" ><br><br>

	            <label for="dob"><b>DOB: </b></label>
	            <input type="date" name="dob" required><br><br>

	            <label for="sex"><b>Sex: </b></label>
	            <input type="text" name="sex" required><br><br>

	            <label for="id"><b>Employee ID(UNIQUE): </b></label>
	            <input type="text" name="eid" required><br><br>

	            <label for="salary"><b>Salary: </b></label>
	            <input type="text" name="salary" required><br><br>

	            <label ><b>Phone No.: </b></label>
	            <input type="text" name="ph_no" required><br><br>

	            <label ><b>Qualification: </b></label>
	            <input type="text" name="qualification" required><br><br>

	            <label ><b>Post: </b></label>
	            <input type="text" name="post" required><br><br>

	            <label ><b>Department Id: </b></label>
	            <input type="text" name="did" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div>
</body>
</html>

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");
 	$fname = mysqli_real_escape_string($connection, $_POST['fname']); // for no SQL injections 
	$lname = mysqli_real_escape_string($connection, $_POST['lname']);
	$mname = mysqli_real_escape_string($connection, $_POST['mname']);
	$dob = mysqli_real_escape_string($connection, $_POST['dob']);
	$sex = mysqli_real_escape_string($connection, $_POST['sex']);
	$eid = (int)mysqli_real_escape_string($connection, $_POST['eid']);
	$salary = (float)mysqli_real_escape_string($connection, $_POST['salary']);
	$ph_no = mysqli_real_escape_string($connection, $_POST['ph_no']);
	$qualification = mysqli_real_escape_string($connection, $_POST['qualification']);
	$post = mysqli_real_escape_string($connection, $_POST['post']);
	$did = (int)mysqli_real_escape_string($connection, $_POST['did']);

	$insert_user_sql = "INSERT INTO EMP VALUES
	('$fname', '$lname', '$mname', '$dob', '$sex', $eid, $salary, '$ph_no', '$qualification', '$post', $did)";

	if (mysqli_query($connection, $insert_user_sql)) {
    	echo "<br>"."New Employee created successfully";
	}
	else {
    	echo "Error: " . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
 }
 ?>