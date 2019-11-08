<?php 
echo $_POST['username'], $_POST['password'];
$servername = "localhost";
$connection = mysqli_connect($servername, 'root', '', "dbs_project") or die("Could Not connect to DB");
$sql = "SELECT * FROM user";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['ID'].$row['username'].$row['password']."<br>";
    }
}
mysqli_close($connection);
?>