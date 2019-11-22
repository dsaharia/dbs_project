<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");

    $h_id = (int)mysqli_real_escape_string($connection, $_POST['h_id']);

    $get_user_sql = "SELECT P.Pname,P.Budget,P.St_date,P.Totalsales,D.Dnumber from PRODUCT P JOIN DEPT D ON(P.D_NO = D.Dnumber) where P.Head_id = $h_id ";
    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."<b>Query successfull</b>"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Project Name</th>"; 
        echo "<th>Budget</th>"; 
        echo "<th>Start Date</th>";
        echo "<th>Total Sales</th>";
        echo "<th>Dept. Number</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Pname']."</td>"; 
                echo "<td>".$row['Budget']."</td>"; 
                echo "<td>".$row['St_date']."</td>";
                echo "<td>".$row['Totalsales']."</td>";
                echo "<td>".$row['Dnumber']."</td>";
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
</head>
<body>
    <br>
    <form action="" method="POST">
        <label for="did"><b>Enter Manager. ID: </b></label>
        <input type="text" name="h_id" required><br><br>
        <input type="submit" value="Log in"><br><br>
    </form>
</body>
</html>