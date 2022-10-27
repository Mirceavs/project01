<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

if (emptyInputLogin($email, $password,) !== false) {
    header("location: ../Php/login.php?error=emptyinput");
    exit();
    }

    loginUser($conn, $email, $password);
}
else { 
    header("location: ../Php/login.php");
        exit();
}