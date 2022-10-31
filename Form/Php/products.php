<?php
include 'header.php';
require_once '../Includes/dbh.inc.php';
require_once '../Includes/functions.inc.php';
require_once '../Includes/products.inc.php';
?>

<div class="container">
    <div class="row text-center py-5">
<?php
    // Products from database
    $result = getData($conn, ['product_name'], ['product_price'], ['product_image']);
    while ($row=mysqli_fetch_assoc($result)){
        component($row['product_name'], $row['product_price'], $row['product_image']);
    }
?> 
</div>
</div>
<?php
include_once 'footer.php';
?>