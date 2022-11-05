<?php
function detailsElement($productimg, $productname, $productprice, $productid){
    $element ="
    <form action='details.php?product_id=$productid' method='get'>
        <div class='container mt-5 mb-5'>
        <div class='row d-flex justify-content-center'>
            <div class='col-md-10'>
                <div class='card'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class='images p-3'>
                                <div class='text-center p-4'> <img id='main-image' src=$productimg /> </div>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='product p-4'>
                                <div class='d-flex justify-content-between align-items-center'>
                                </div>
                                <div class='mt-4 mb-3'> <span class='text-uppercase text-muted brand'>Salam</span>
                                    <h5 class='text-uppercase'>$productname</h5>
                                    <div class='price d-flex flex-row align-items-center'> <span class='act-price'>$$productprice</span>
                                    </div>
                                </div>
                            <p class='about'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    ";
    echo $element;
}