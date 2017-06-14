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

    <div class="container">
        <h1 class="title-cart text-center">
            Shopping cart
        </h1>

        <div class="row">
            <div class="col-md-8">
                <ul class="list-cart_pro">
                    <li class="box-border">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/slide.jpg" class="img-responsive" alt="...">
                            </div>
                            <div class="col-md-8">
                                <ul class="shopping-pro_detail">
                                    <li>Product name: <span>xxxxxx</span></li>
                                    <li>Price: <span class="price">$300</span></li>
                                    <li>Color: <span>White</span></li>
                                    <li>Size: <span>30x30</span></li>
                                    <li>
                                        <a href="#" class="btn-cart_delete">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </a>
                                        <div class="styled-select slate">
                                            <select>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="box-border">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/slide.jpg" class="img-responsive" alt="...">
                            </div>
                            <div class="col-md-8">
                                <ul class="shopping-pro_detail">
                                    <li>Product name: <span>xxxxxx</span></li>
                                    <li>Price: <span class="price">$300</span></li>
                                    <li>Color: <span>White</span></li>
                                    <li>Size: <span>30x30</span></li>
                                    <li>
                                        <a href="#" class="btn-cart_delete">
                                            <span class="glyphicon glyphicon-trash"></span> Delete
                                        </a>
                                        <div class="styled-select slate">
                                            <select>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h1 class="title-total_cart">Total</h1>
                <div class="box-border">

                    <table class="table table-cart_total">
                        <tr>
                            <td>Product name</td>
                            <td>1</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>1</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-left">
                                <!-- <div class="checkbox">
                                    <label>
                                        <img src="images/icon-checked.jpg" alt="" height="20"> ลงทะเบียน 40
                                    </label>
                                </div> -->
                                <label>
                                    <img src="images/icon-checked.jpg" alt="" height="18"> EMS ฟรี
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>รวม</strong></td>
                            <td><strong class="price">300</strong></td>
                        </tr>
                    </table>

                    <div class="text-center"><a href="ordered.php"><button class="btn btn-default btn-handmade" type="submit">ยืนยัน</button></a></div>
                </div>
            </div>
        </div>


    </div>

    <?php compo_footer(); ?>
</body>

</html>
