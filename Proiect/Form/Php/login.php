<?php
include_once 'header.php';
?>

<div class="center">
<h2>Log In</h2>
<form action="../Includes/login.inc.php" method="post">
<div class= "inputbox">
    <input type="text"  name="email"  placeholder="Email..."><br>
        </div>
<div class= "inputbox">
    <input type="password"  name="password" placeholder="Password..."><br><br>
        </div>
<div class= "inputbox">
    <button type="submit" name="submit">Log In</button>
        </div>
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