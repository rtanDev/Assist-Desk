<?php

if (isset($_POST["signup"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    
    if(emptyInputSignup($username, $email, $password, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !== false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }

    if(passMatch($password, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    } 

    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $email, $password);

} 
else {
    header("location: ../signup.php");
    exit();
}