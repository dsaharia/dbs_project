<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect('localhost', 'root', '', "dbs_project") or die("Could Not connect to DB");

    $did = (int)mysqli_real_escape_string($connection, $_POST['did']);

    $get_user_sql = "SELECT * FROM EMP WHERE D_ID = $did";
    if ($result = mysqli_query($connection, $get_user_sql)) {
        echo "<br>"."Query successfull"."<br>";
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Firstname</th>"; 
        echo "<th>Lastname</th>"; 
        echo "<th>Minit</th>"; 
        echo "<th>DOB</th>";
        echo "<th>Sex</th>";
        echo "<th>ID</th>";
        echo "<th>Salary</th>";
        echo "<th>Phone</th>";
        echo "<th>Qualification</th>";
        echo "<th>Post</th>";
        echo "<th>Dept. ID</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>"; 
                echo "<td>".$row['Fname']."</td>"; 
                echo "<td>".$row['Lname']."</td>"; 
                echo "<td>".$row['Minit']."</td>";
                echo "<td>".$row['DOB']."</td>";
                echo "<td>".$row['Sex']."</td>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Salary']."</td>";
                echo "<td>".$row['Phone']."</td>";
                echo "<td>".$row['Qualification']."</td>";
                echo "<td>".$row['Post']."</td>";
                echo "<td>".$row['D_ID']."</td>";
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
    <form action="" method="POST">
        <label for="did"><b>Enter Dept. ID: </b></label>
        <input type="text" name="did" required><br><br>
        <input type="submit" value="Log in"><br><br>
    </form>
</body>
</html>