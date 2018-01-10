<?php

if (isset($_POST ['submit'])) {

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn . $_POST['first']);
    $last = mysqli_real_escape_string($conn . $_POST['last']);
    $email = mysqli_real_escape_string($conn . $_POST['email']);
    $uid = mysqli_real_escape_string($conn . $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn . $_POST['pwd']);

    // error
    if (empty($first) || empty ($last) || empty ($email) || empty ($uid) || empty ($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        // check if unput characters are valid
        }

}

} else {
    header("Location: ../signup.php")
        exit();

}
