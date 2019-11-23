<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");

    $did = (int)mysqli_real_escape_string($connection, $_POST['did']);

    $get_user_sql = "SELECT D.Name,D.Relatntype from EMP E JOIN DEPENDENT D ON (E.ID = D.E_ID) where D.E_ID = $did";
    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."<b>Query successfull</b>"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Name</th>"; 
        echo "<th>Relation Type</th>"; 
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Name']."</td>"; 
                echo "<td>".$row['Relatntype']."</td>"; 
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
        <label for="did"><b>Enter Employee ID: </b></label>
        <input type="text" name="did" required><br><br>
        <input type="submit" value="Enter"><br><br>
    </form>
</body>
</html>