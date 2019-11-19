<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>
    <div class="form-container">
        <form action="" method="POST">
                <label ><b>Employee ID: </b></label>
                <input type="text" name="eid" required><br><br>

                <label for="pid"><b>Product ID.: </b></label>
                <input type="text" name="pid" required><br><br>

                <label ><b>Hours: </b></label>
                <input type="text" name="hour" required><br><br>


                <input type="submit" value="Send Data">
        </form>
    </div>
</body>
</html>

 <?php
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");
    $eid = mysqli_real_escape_string($connection, $_POST['eid']); // for no SQL injections 
    $pid = (int)mysqli_real_escape_string($connection, $_POST['pid']);
    $hour = mysqli_real_escape_string($connection, $_POST['hour']);
    // echo $name, $pid,$st_date;
    $insert_user_sql = "INSERT INTO EMP_PRO VALUES ('$eid', $pid, $hour)";
    
    if (mysqli_query($connection, $insert_user_sql)) {
        echo "<br>"."New Employee-Product created successfully";
    }
    else {
        echo "<br>" ."Error: " . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
 }


 ?> 