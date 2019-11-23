<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");

    $did = (int)mysqli_real_escape_string($connection, $_POST['did']);

    $get_user_sql = "SELECT Sname,Buildname,City,Country from LOCATION where D_no = $did";
    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."<b>Query successfull</b>"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Street name</th>"; 
        echo "<th>Building name</th>"; 
        echo "<th>City</th>";
        echo "<th>Country</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Sname']."</td>"; 
                echo "<td>".$row['Buildname']."</td>"; 
                echo "<td>".$row['City']."</td>";
                echo "<td>".$row['Country']."</td>";
            echo "</tr>"; 
        }
    }
    else {
        echo "Error: " . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
 }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Views</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
    <br>
    <form action="" method="POST">
        <label for="did"><b>Enter Department. ID: </b></label>
        <input type="text" name="did" required><br><br>
        <input type="submit" value="Enter"><br><br>
    </form>
</body>
</html>