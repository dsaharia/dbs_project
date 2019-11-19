<!DOCTYPE html>
<html>
<head>
	<title>Dependent</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label ><b>Dependent Name: </b></label>
	            <input type="text" name="dname" required><br><br>

	            <label ><b>Employee ID.(UNIQUE): </b></label>
	            <input type="text" name="eid" required><br><br>

	            <label ><b>Sex(M/F): </b></label>
	            <input type="text" name="sex" required><br><br>

	            <label ><b>DOB: </b></label>
	            <input type="date" name="dob" required><br><br>

	            <label ><b>Relationship Type: </b></label>
	            <input type="text" name="rel_type" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div>
</body>
</html>

<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");
    $dname = mysqli_real_escape_string($connection, $_POST['dname']); // for no SQL injections 
    $eid = (int)mysqli_real_escape_string($connection, $_POST['eid']);
    $sex = mysqli_real_escape_string($connection, $_POST['sex']);
    $dob = mysqli_real_escape_string($connection, $_POST['dob']);
    $rel_type = mysqli_real_escape_string($connection, $_POST['rel_type']);

    $insert_user_sql = "INSERT INTO DEPENDENT VALUES
    ( $eid, '$dname', '$sex', '$dob', '$rel_type')";

    if (mysqli_query($connection, $insert_user_sql)) {
        echo "<br>"."New Dependent created successfully";
    }
    else {
        echo "Error: " . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
 }
 ?>