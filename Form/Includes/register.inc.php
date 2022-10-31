<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

if (emptyInputRegister($email, $password, $cpassword) !== false) {
    header("location: ../Php/register.php?error=emptyinput");
    exit();
    }

if (invalidEmail($email) !== false) {
    header("location: ../Php/register.php?error=invalidemail");
    exit();
    }

if (pwdMatch($password, $cpassword) !== false) {
    header("location: ../Php/register.php?error=passwordsdontmatch");
    exit();
    }

if (emailExist($conn, $email) !== false) {
    header("location: ../Php/register.php?error=emailtaken");
    exit();
    }

    createUser ($conn, $email, $password);
} 
else {
    header("location: ../Php/register.php");
}