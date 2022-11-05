<?php
include 'header.php';
include '../Includes/dbh.inc.php';
    if(isset($_GET['product_details'])){
    $product_id = $_GET['product_details'];
    $sql = "SELECT * FROM productsdb WHERE id=$product_id";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $product_id=$row['id'];
        $product_name=$row['product_name'];
        $product_price=$row['product_price'];
        $product_image=$row['product_image'];
echo "<div class='col-md-3 col-sm-6 my-3 my-md-0'>
            <form action='products.php?product_details=$product_id' method='get'>
                <div class='card shadow'>
                    <div>
                        <img src='$product_image' alt='Product' class='img-fluid card-img-top'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <h6>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star'></i>
                        </h6>
                        <p class='card-text'>
                            Some quick example to build on the card
                        </p>
                        <h5>
                            <small><s class='text-secondary'>$15</s></small>
                            <span class='price'>$$product_price</span>
                        </h5>
                    </div>
                </div>
            </form>
        </div>";
}}
?>

<?php

?>
<?php
include_once ('footer.php');
?>