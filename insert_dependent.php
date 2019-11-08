<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label ><b>Dependent Name: </b></label>
	            <input type="text" name="dname" required><br><br>

	            <label ><b>Employee ID.(UNIQUE): </b></label>
	            <input type="text" name="eid" required><br><br>

	            <label ><b>Sex: </b></label>
	            <input type="text" name="sex" required><br><br>

	            <label ><b>DOB: </b></label>
	            <input type="text" name="dob" required><br><br>

	            <label ><b>Relationship Type: </b></label>
	            <input type="text" name="rel_type" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	echo $_POST['dname'];
    }
    ?>
</body>
</html>