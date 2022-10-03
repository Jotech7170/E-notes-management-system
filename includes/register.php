<?php
include_once './dbh.php';

if (isset($_POST['signup'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $passwor = $_POST['password'];
    $type = $_POST['who'];
    $department = $_POST['department'];
    $program = $_POST['program'];
    $level = $_POST['level'];
    $password = md5($passwor);
    $sqli = "SELECT * FROM users WHERE  email='$email'";
    $resulti = mysqli_query($con, $sqli);
    if (mysqli_num_rows($resulti) > 0) {
        header("Location:../index.php?errorup=Email Already used Sign up Again!!!");
        exit();
    } else {
        $sql = "INSERT INTO users (username,email,password,type,department,program,level) VALUE ('$username','$email', '$password','$type',' $department','$program','$level')";
        $result = mysqli_query($con, $sql);
        header("Location:../index.php");
        exit();
    }
}
