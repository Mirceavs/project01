<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<ul>
<li><a href="Home.php">Home</a></li>  
<li class="dropdown">
<a href="javascript:void(0)" class="dropbtn">Profile</a>
<div class="dropdown-content">

<?php
    if (isset($_SESSION["useremail"])) {
        echo "<a href='../Includes/logout.inc.php'>Log Out</a>";
    } else {
        echo "<a href='login.php'>Login In</a>";
        echo "<a href='register.php'>Register</a>";
    }
?>
    </div>
</li>
</ul>