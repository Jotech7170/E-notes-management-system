<?php
include_once './dbh.php';
session_start();
$uid = $_SESSION['id'];
$type = $_SESSION['type'] . 's';
if (isset($_POST['update'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $passwor = $_POST['password'];
    $department = $_POST['department'];
    $program = $_POST['program'];
    $level = $_POST['level'];
    $password = md5($passwor);
    // $sqli = "SELECT * FROM users WHERE  email='$email'";
    // $resulti = mysqli_query($con, $sqli);
    // if (mysqli_num_rows($resulti) > 0) {
    //     header("Location:../$type/profile.php?errorup=Email Already used use another one!!!");
    //     exit();
    // } else {
    die(print_r($uid));
    $sql = " UPDATE users SET (username,email,password,department,program,level) VALUE ('$username', '$email','$password','$department','$program','$level') WHERE id = '$uid";
    // $sql = " UPDATE users SET username = '$username', email = '$email', password = '$password', department = '$department', program = '$program', level = '$level' WHERE id = '$uid";
    // $sql =  "UPDATE FROM users   WHERE id = '$uid" SET ;
    // $sql = "INSERT INTO users (username,email,password,type,department,program,level) VALUE ('$username','$email', '$password','$type',' $department','$program','$level')";
    $result = mysqli_query($con, $sql);
    header("Location:../$type/profile.php?errorup=profile updated");
    exit();
    // }
}
