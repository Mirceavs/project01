<?php
    include_once 'header.php';
?>  

<div class="center">
<h2>Sign up</h2>
    <form action="../Includes/register.inc.php" method="post">
    <div class="inputbox">
        <input type="text"  name="email"  placeholder="Email..."><br>
    </div>
    <div class="inputbox">
        <input type="password"  name="password" placeholder="Password"><br>
    </div>
    <div class="inputbox">
        <input type="password"  name="cpassword" placeholder="Confirm Password..."><br><br>
    </div>
    <div class="inputbox">
        <button type="submit" name="submit">Register</button>
    </div>
    </form>
</div>

<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p> Fill all fields!</p>";
    }
    if($_GET["error"] == "invalidemail"){
        echo "<p> Choose a proper email!</p>";
    }
    if($_GET["error"] == "passwordsdontmatch"){
        echo "<p> Passwords doesn't match!</p>";
    }
    if($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong!</p>";
    }
    if($_GET["error"] == "emailtaken"){
        echo "<p>Email already taken!</p>";
    }
    if($_GET["error"] == "none"){
        echo "<p>You just registered!</p>";
    }
}
?>

<?php
    include_once 'footer.php';
?>