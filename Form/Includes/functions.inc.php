<?php

function emptyInputRegister($email, $password, $cpassword) {
    $result;
    if(empty($email) || empty($password) || empty($cpassword)) {
    $result = true;
    }
else {
    $result = false;

 }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
    }
  else {
    $result = false;

 }
    return $result;
}

function pwdMatch($password, $cpassword) {
    $result;
    if($password !== $cpassword) {
    $result = true;
    }
  else {
    $result = false;

 }
    return $result;
}

function emailExist($conn, $email) {
   $sql = "SELECT * FROM loginusers WHERE Email = ?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Php/register.php?error=stmtfailed");
        exit();
   }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);
    if($row != null){
        return $row;
    }
    mysqli_stmt_close($stmt);
    return false;
}

function createUser($conn, $email, $password) {
   $sql = "INSERT INTO loginusers (Email, Password) VALUES (?, ?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Php/register.php?error=stmtfailed");
        exit();
   }
   $hashedPwd = crypt($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../Php/register.php?error=none");
        exit();
}

function emptyInputLogin($email, $password) {
    $result;
    if(empty($email) || empty($password)) {
    $result = true;
    }
else {
    $result = false;

 }
    return $result;
}

function loginUser($conn, $email, $password){
    $emailExist = emailExist($conn, $email);

    if($emailExist == false){
         header("location: ../Php/login.php?error=missingEmail");
        exit();
    }

    $pwdHashed = $emailExist["Password"];
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd == false){
         header("location: ../Php/login.php?error=wrongPassword");
        exit();
    }
    else if($checkPwd == true){
        session_start();
        $_SESSION["userid"] = $emailExist["UserId"];
        $_SESSION["useremail"] = $emailExist["Email"];
        header("location: ../Php/Home.php");
        exit();
    }

}