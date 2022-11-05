<?php
require_once '../Includes/dbh.inc.php';
require_once '../Includes/functions.inc.php';
require_once '../Includes/products.inc.php';
function component($productname, $productprice, $productimg, $productid){
    $element ="

    <div class='col-md-3 col-sm-6 my-3 my-md-0'>
            <form action='products.php' method='post'>
                <div class='card shadow'>
                    <div>
                        <img src='$productimg' alt='salam' class='img-fluid card-img-top'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>$productname</h5>
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
                            <span class='price'>$$productprice</span>
                        </h5>
                        <button type='submit' class='btn btn-warning my-3' name='add'>Add to cart<i class='fas fa-shopping-cart'></i></button>
                        <input type='hidden' name='product_id' value='$productid'>
                        <button type='submit' class='btn btn-dark my-3'><a href='../Php/details.php?product_details=$productid' name='details'>Details</a></button>
                    </div>
                </div>
            </form>
        </div>";
echo $element;
}

// <div class="container">
//     <div class="row text-center py-5">
//         <div class="col-md-3 col-sm-6 my-3 my-md-0">
//             <form action="products.php" method="post">
//                 <div class="card shadow">
//                     <div>
//                         <img src="../Imagini/salam.jpg" alt="salam1" class="img-fluid card-img-top">
//                     </div>
//                     <div class="card-body">
//                         <h5 class="card-title">Salam 1</h5>
//                         <h6>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="far fa-star"></i>
//                         </h6>
//                         <p class="card-text">
//                             Some quick example to build on the card
//                         </p>
//                         <h5>
//                             <small><s class="text-secondary">$15</s></small>
//                             <span class="price">$20</span>
//                         </h5>
//                         <button type="submit" class="btn btn-warning my-3 " name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
//                     </div>
//                 </div>
//             </form>
//         </div>
//         <div class="col-md-3 col-sm-6 my-3 my-md-0">
//             <form action="products.php" method="post">
//                 <div class="card shadow">
//                     <div>
//                         <img src="../Imagini/salam.jpg" alt="salam1" class="img-fluid card-img-top">
//                     </div>
//                     <div class="card-body">
//                         <h5 class="card-title">Salam</h5>
//                         <h6>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="far fa-star"></i>
//                         </h6>
//                         <p class="card-text">
//                             Some quick example to build on the card
//                         </p>
//                         <h5>
//                             <small><s class="text-secondary">$15</s></small>
//                             <span class="price">$50</span>
//                         </h5>
//                         <button type="submit" class="btn btn-warning my-3 " name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
//                     </div>
//                 </div>
//             </form>
//         </div>
//         <div class="col-md-3 col-sm-6 my-3 my-md-0">
//             <form action="products.php" method="post">
//                 <div class="card shadow">
//                     <div>
//                         <img src="../Imagini/salam.jpg" alt="salam1" class="img-fluid card-img-top">
//                     </div>
//                     <div class="card-body">
//                         <h5 class="card-title">Salam</h5>
//                         <h6>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="far fa-star"></i>
//                         </h6>
//                         <p class="card-text">
//                             Some quick example to build on the card
//                         </p>
//                         <h5>
//                             <small><s class="text-secondary">$15</s></small>
//                             <span class="price">$50</span>
//                         </h5>
//                         <button type="submit" class="btn btn-warning my-3 " name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
//                     </div>
//                 </div>
//             </form>
//         </div>
//         <div class="col-md-3 col-sm-6 my-3 my-md-0">
//             <form action="products.php" method="post">
//                 <div class="card shadow">
//                     <div>
//                         <img src="../Imagini/salam.jpg" alt="salam1" class="img-fluid card-img-top">
//                     </div>
//                     <div class="card-body">
//                         <h5 class="card-title">Salam</h5>
//                         <h6>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="fas fa-star"></i>
//                         <i class="far fa-star"></i>
//                         </h6>
//                         <p class="card-text">
//                             Some quick example to build on the card
//                         </p>
//                         <h5>
//                             <small><s class="text-secondary">$15</s></small>
//                             <span class="price">$50</span>
//                         </h5>
//                         <button type="submit" class="btn btn-warning my-3 " name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
//                     </div>
//                 </div>
//             </form>
//         </div>
//     </div>
// </div>
// }
// ?>