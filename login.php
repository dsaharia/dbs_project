<?php 
session_start();
// SELECT E.Fname,E.Lname,E.Minit,E.Phone,E.Post,D.Name from EMP E JOIN DEPT D ON(E.D_ID = D.Dnumber) done
//SELECT D.Name,D.Relatntype from EMP E JOIN DEPENDENT D ON (E.ID = D.E_ID)
//SELECT E.Fname,E.Lname,E.Minit,E.Minit,E.Phone,E.Salary from EMP E JOIN DEPT D ON (E.D_ID = D.Dnumber) where D.Mgr = 4
//SELECT P.Pname,P.Budget,P.St_date,P.Totalsales,D.Dnumber from PRODUCT P JOIN DEPT D ON(P.D_NO = D.Dnumber) where P.Head_id = 2 
//SELECT E.Fname,E.Lname,E.Minit,P.D_NO from EMP E JOIN PRODUCT P on(P.Head_id = E.ID) where P.D_NO = 2 
//SELECT D_ID, COUNT(*) FROM EMP GROUP BY D_ID 
//SELECT Name,Dnumber,Website from DEPT 
//SELECT Sname,Buildname,City,Country from LOCATION where D_no = 2 
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