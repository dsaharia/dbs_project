<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label for="name"><b>Name: </b></label>
	            <input type="text" name="name" required><br><br>

	            <label for="did"><b>Department No.(UNIQUE): </b></label>
	            <input type="text" name="did" required><br><br>

	            <label for="mname"><b>Middle Initial: </b></label>
	            <input type="text" name="mname" required><br><br>

	            <label ><b>Website </b></label>
	            <input type="text" name="website" required><br><br>

	            <label for="sex"><b>Established Date: </b></label>
	            <input type="text" name="est_date" required><br><br>

	            <label ><b>Manager Id: </b></label>
	            <input type="text" name="mgr_id" required><br><br>

	            <label ><b>Manager Start date: </b></label>
	            <input type="text" name="mgr_str_date" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div>
    <!-- <?php echo $_POST['username'];?> -->
</body>
</html>