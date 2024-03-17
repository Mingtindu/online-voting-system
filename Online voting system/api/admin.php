<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

$check= mysqli_query($connect,"SELECT * FROM admindetails WHERE email='$email' AND password ='$password'");
if(mysqli_num_rows($check)>0){
    $userData = mysqli_fetch_array($check);
    $_SESSION['adminData']=$adminData;
    echo'
    <script>
    window.location= "../routes/adminDashboard.php";
    </script>
';
}else{
    echo'
         <script>
         alert("Invalid credential or user not found ");
         window.location="../";
         </script>
    ';
}

?>