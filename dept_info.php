<?php 
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");


    $get_user_sql = "SELECT Name,Dnumber,Website from DEPT ";
    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."<b>Query successfull</b>"."<br>"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Department Name</th>"; 
        echo "<th>Dept. Number</th>"; 
        echo "<th>Website</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Name']."</td>"; 
                echo "<td>".$row['Dnumber']."</td>"; 
                echo "<td>".$row['Website']."</td>";
            echo "</tr>"; 
        }
    }
    else {
        echo "Error: " . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Views</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>

</body>
</html>