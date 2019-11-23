<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");

    $did = (int)mysqli_real_escape_string($connection, $_POST['did']);

    $get_user_sql = "SELECT E.Fname,E.Lname,E.Minit,E.Phone,E.D_ID,E.P_ID from EMP E where E.P_ID = $did";
    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."<b>Query successfull</b>"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Fname</th>"; 
        echo "<th>Lname</th>"; 
        echo "<th>Minit</th>";
        echo "<th>Phone</th>";        
        echo "<th>Dept. No</th>";
        echo "<th>Product. No</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Fname']."</td>"; 
                echo "<td>".$row['Lname']."</td>"; 
                echo "<td>".$row['Minit']."</td>";
                echo "<td>".$row['Phone']."</td>";
                echo "<td>".$row['D_ID']."</td>";
                 echo "<td>".$row['P_ID']."</td>";

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
        <label for="did"><b>Enter Product ID: </b></label>
        <input type="text" name="did" required><br><br>
        <input type="submit" value="Enter"><br><br>
    </form>
</body>
</html>