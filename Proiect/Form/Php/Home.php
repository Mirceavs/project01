<?php
include 'header.php';
?>

<section class="home">
<?php
if(isset($_SESSION["useremail"])) {
    echo "<p>Helo there " .  $_SESSION["useremail"] . "</p>";
}
?>

<h1>PHP Project01</h1>
<p> Cacacacaccacacacaccacacacaccacacacacaccaca</p>
</section>

<?php
include 'footer.php';
?>