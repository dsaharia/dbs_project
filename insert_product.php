<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
	<div class="form-container">
		<form action="" method="POST">
	            <label for="name"><b>Product Name: </b></label>
	            <input type="text" name="name" required><br><br>

	            <label for="pid"><b>Product ID.(UNIQUE): </b></label>
	            <input type="text" name="pid" required><br><br>

	            <label ><b>Start Date: </b></label>
	            <input type="date" name="st_date" required><br><br>

	            <label ><b>Total Sales: </b></label>
	            <input type="text" name="sales" required><br><br>

	            <label ><b>Release Date: </b></label>
	            <input type="date" name="rel_date" required><br><br>

	            <label ><b>Budget: </b></label>
	            <input type="text" name="budget" required><br><br>

	            <label ><b>Product Head Id: </b></label>
	            <input type="text" name="phead_id" required><br><br>

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
 	$name = mysqli_real_escape_string($connection, $_POST['name']); // for no SQL injections 
	$pid = (int)mysqli_real_escape_string($connection, $_POST['pid']);
	$st_date = mysqli_real_escape_string($connection, $_POST['st_date']);
	$sales = (float)mysqli_real_escape_string($connection, $_POST['sales']);
	$rel_date = mysqli_real_escape_string($connection, $_POST['rel_date']);
	$budget = (float)mysqli_real_escape_string($connection, $_POST['budget']);
	$phead_id = (int)mysqli_real_escape_string($connection, $_POST['phead_id']);
	$did = (int)mysqli_real_escape_string($connection, $_POST['did']);
	// echo $name, $pid,$st_date;
	$insert_user_sql = "INSERT INTO PRODUCT(Pname,Pno,Totalsales,Releasedate,Budget,St_date,Head_id,D_NO) VALUES
	('$name', $pid, $sales,'$rel_date', $budget, '$st_date', $phead_id, $did)";
	if (mysqli_query($connection, $insert_user_sql)) {
    	echo "<br>"."New Product created successfully";
	}
	else {
    	echo "Error: " . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
 }


 ?> 