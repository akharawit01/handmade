<?php
include 'component/component.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bekazii Handmade</title>
    <?php compo_stylesheets(); ?>
</head>

<body>
    <?php compo_cart(); ?>
    <?php compo_header(); ?>

    <div class="container product_detail">
        <div class="row">
            <div class="col-md-8">
                picture
            </div>
            <div class="col-md-4">
                <ul class="pro_detail">
                    <li>Product name: xxxxx</li>
                    <li>Price: <span class="price">$300</span></li>
                    <li>Color: Red</li>
                    <li>
                        <ul class="list-inline pro_color">
                            <li>
                                <span class="color-circle" style="background: red;">&nbsp;</span>
                            </li>
                            <li>
                                <span class="color-circle" style="background: green;">&nbsp;</span>
                            </li>
                            <li>
                                <span class="color-circle" style="background: blue;">&nbsp;</span>
                            </li>
                        </ul>
                    </li>
                    <li>Size: 32</li>
                    <li>
                        Product Description
                        <p>....</p>
                    </li>
                </ul>
                <div class="text-center">
                    <button type="button" class="btn btn-default btn-addcart">หยิบใส่ตระกร้า</button>
                </div>
            </div>
        </div>

        <h1 class="title">
            สินค้าแนะนำ
        </h1>

        <div class="row dbrow">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail thumbnail_arrival">
                    <a href="#">
                        <img src="images/slide.jpg" alt="...">
                        <div class="caption text-center">
                            <h3>Eiffel Jeans</h3>
                            <p class="price">$300</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail thumbnail_arrival">
                    <a href="#">
                        <img src="images/slide.jpg" alt="...">
                        <div class="caption text-center">
                            <h3>Eiffel Jeans</h3>
                            <p class="price">$300</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail thumbnail_arrival">
                    <a href="#">
                        <img src="images/slide.jpg" alt="...">
                        <div class="caption text-center">
                            <h3>Eiffel Jeans</h3>
                            <p class="price">$300</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </div>

    <?php compo_footer(); ?>
</body>

</html>
