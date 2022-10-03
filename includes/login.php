<?php
include_once './dbh.php';
session_start();
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $passwor = $_POST['password'];
    $password = md5($passwor);
    $sql = "SELECT * FROM users WHERE  email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['depart'] = $row['department'];
        $_SESSION['program'] = $row['program'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['type'] = $row['type'];
        if ($_SESSION['type'] == "lecture") {
            header("Location:../lectures/Dashboard.php");
            exit();
        } elseif ($_SESSION['type'] == "student") {
            header("Location:../students/Dashboard.php");
            exit();
        }
    } else {
        header("Location:../index.php?errorin=Incorrect username or Password");
        exit();
    }
}
