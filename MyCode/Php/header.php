<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Project 01</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Welcome</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
</button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria_control="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="profile.php" role="button" data-bs-toggle="dropdown">Profile</a>
                <ul class="dropdown-menu">
<?php
    if (isset($_SESSION["useremail"])) {
        echo "<li><a class='dropdown-item' href='../Includes/logout.inc.php'>Log Out</a></li>";
    } else {
        echo "<li><a class='dropdown-item' href='login.php'>Login In</a></li>";
        echo "<li><a class='dropdown-item' href='register.php'>Register</a></li>";
    }
?>
</ul>
                </li>
            </ul>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                        <h5 class="px5 cart">
                            <i class="fas fa-shopping-cart"></i> Cart 
<?php
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
echo "<span id='cart_count' class='text-warning bg-light'>$count</span>";
} else {
echo "<span id='cart_count' class='text-warning bg-light'>0</span>";
}
?>
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>