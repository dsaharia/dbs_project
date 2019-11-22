<?php 
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");


    $get_user_sql = "SELECT P.Pname,P.Budget,P.St_date,P.Totalsales,D.Dnumber,E.Fname,E.Lname,P.Head_id from PRODUCT P, EMP E, DEPT D where P.D_NO=D.Dnumber and E.ID=P.Head_id";

    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."<b>Query successfull</b>"."<br>"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Project Name</th>"; 
        echo "<th>Budget</th>"; 
        echo "<th>Start Date</th>";
        echo "<th>Total Sales</th>";
        echo "<th>Dept. Number</th>";
        echo "<th>Fname</th>";
        echo "<th>Lname</th>";
        echo "<th>Product Head ID</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Pname']."</td>"; 
                echo "<td>".$row['Budget']."</td>"; 
                echo "<td>".$row['St_date']."</td>";
                echo "<td>".$row['Totalsales']."</td>";
                echo "<td>".$row['Dnumber']."</td>";
                echo "<td>".$row['Fname']."</td>";
                echo "<td>".$row['Lname']."</td>";
                echo "<td>".$row['Head_id']."</td>";
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
</head>
<body>
</body>
</html>