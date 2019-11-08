<?php 
session_start();

$servername = "localhost";

$connection = mysqli_connect($servername, 'root', '', "dbs_project") or die("Could Not connect to DB");
$username = mysqli_real_escape_string($connection, $_POST['username']); // for no SQL injections 
$password = mysqli_real_escape_string($connection, $_POST['password']);

$check_user_sql = "SELECT * FROM user WHERE (username='$username' AND password='$password')";
$result = mysqli_query($connection, $check_user_sql);
$rows = mysqli_num_rows($result);
if($rows == 1){
    $rows = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['category'] = $rows['category'];

    if ($_SESSION['category'] == 'manager') {
        header('Location: manager.php');
    }
    elseif($_SESSION['category'] == 'employee'){
        header('Location: employee.php');
    }
    else{
        header('Location: admin.php');
    }
}
else {
    echo "<h4>Incorrect Username/Password</h4>";
    // header('Location: index.html');
    exit();
}
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo $row['ID'].$row['username'].$row['password']."<br>";
//     }
// }


mysqli_close($connection);
?>