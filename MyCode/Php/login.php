<?php
include_once 'header.php';
?>
<div class="container mt-3">
<h2>Log In</h2>
<form action="../Includes/login.inc.php" method="post">
    <div class="mb-3 mt-3">
    <input type="text"  name="email"  placeholder="Email..."><br>
    </div>
    <div class="mb-3">
    <input type="password"  name="password" placeholder="Password..."><br><br>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Log In</button>
</form>
</div>

<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p> Fill all fields!</p>";
    }
    if($_GET["error"] == "wrongemail"){
        echo "<p> Incorrect email!</p>";
    }
}
?>

<?php
include_once 'footer.php';
?>