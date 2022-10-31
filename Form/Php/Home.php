<?php
include 'header.php';
?>

<?php
if(isset($_SESSION["useremail"])) {
    echo "<p>Helo there " .  $_SESSION["useremail"] . "</p>";
}
?>

<h1>PHP Project01</h1>
<p> Cacacacaccacacacaccacacacaccacacacacaccaca</p>

<?php
include 'footer.php';
?>