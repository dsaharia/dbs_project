<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label for="name"><b>Product Name: </b></label>
	            <input type="text" name="name" required><br><br>

	            <label for="pid"><b>Product ID.(UNIQUE): </b></label>
	            <input type="text" name="pid" required><br><br>

	            <label ><b>Start Date: </b></label>
	            <input type="text" name="st_date" required><br><br>

	            <label ><b>Total Sales: </b></label>
	            <input type="text" name="sales" required><br><br>

	            <label ><b>Release Date: </b></label>
	            <input type="text" name="rel_date" required><br><br>

	            <label ><b>Budget: </b></label>
	            <input type="text" name="budget" required><br><br>

	            <label ><b>Product Head Id: </b></label>
	            <input type="text" name="phead_id" required><br><br>

	            <label ><b>Department Id: </b></label>
	            <input type="text" name="did" required><br><br>

	            <input type="submit" value="Send Data">
	    </form>
	</div>
    <!-- <?php echo $_POST['username'];?> -->
</body>
</html>