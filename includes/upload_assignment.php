<?php
include_once './dbh.php';
session_start();

if (isset($_POST['upload_assignment'])) {
    $title =  $_POST['title'];
    $description = $_POST['description'];
    $program = $_POST['program'];
    $level = $_POST['level'];
    $uploader_id = $_SESSION['id'];
    $file = $_FILES['file'];
    $name = $file['name'];
    $type = $file['type'];
    $tmp = $file['tmp_name'];
    $error = $file['error'];
    $size = $file['size'];
    $fileext = explode(".", $name);
    $actualfilext = strtolower(end($fileext));
    $allowed = array('pdf', 'docx', 'doc', 'ppt', 'pptx', 'xlx', 'xls', 'xlsx', 'txt', 'jpg', 'jpeg', 'png');

    if (in_array($actualfilext, $allowed)) {
        if ($error == 0) {
            if ($size < 5000000) {
                $filenamenew = uniqid("", true) . "." . $actualfilext;
                $filedestination = 'uploads/' . $filenamenew;
                $destinationmoved = '../uploads/' . $filenamenew;
                $sql = "INSERT INTO resources (title,description,program,level,filepath,type,uploader_id) VALUE ('$title','$description', '$program', '$level', '$filedestination','assignment','$uploader_id')";
                $result = mysqli_query($con, $sql);
                move_uploaded_file($tmp, $destinationmoved);

                header("Location:../lectures/upload-assignments.php?message=File uploaded successfully!!");
                exit();
            } else {
                header("Location:../lectures/upload-assignments.php?message=The file size is too big!");
            }
        } else {
            header("Location:../lectures/upload-assignments.php?message=There was an error uploading your file!");
        }
    } else {
        header("Location:../lectures/upload-assignments.php?message=You cannot upload files of this type!");
    }
}
