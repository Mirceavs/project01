<?php
    include_once 'header.php';
?>  


<div class="container mt-3">
    <h2>Sign up</h2>
    <form action="../Includes/register.inc.php" method="post">
        <div class="mb-3 mt-3">
        <input type="text"  name="email"  placeholder="Email..."><br>
    </div>
        <div class="mb-3">
        <input type="password"  name="password" placeholder="Password"><br>
    </div>
    <div class="mb-3">
        <input type="password"  name="cpassword" placeholder="Confirm Password..."><br><br>
    </div>
        <button type="submit" class="btn btn-primary" name="submit">Register</button>
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