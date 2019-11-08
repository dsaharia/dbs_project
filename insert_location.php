<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
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
    <!-- <?php echo $_POST['username'];?> -->
</body>
</html>