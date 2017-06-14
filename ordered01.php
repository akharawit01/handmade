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
        
        <ul id="progressbar">
            <li class="active">
                <a href="cart.php"><img src="images/icon-step_active.png" alt="" width="25"></a><br>
                <strong>Account Setup</strong>
            </li>
            <li class="active">
                <a href="ordered.php"><img src="images/icon-step_active.png" alt="" width="25"></a><br>
                <strong>Social Profiles</strong>
            </li>
            <li class="active">
                <a href="#"><img src="images/icon-step_doing.png" alt="" width="25"></a><br>
                <strong>Personal Details</strong>
            </li>
        </ul>

        <div class="row">
            <div class="col-md-8">
                <ul class="list-cart_pro">
                    <li class="box-border">
                        <h1>ที่อยู่ในการจัดส่ง</h1>

                        <div class="text-center successorder">
                            <img src="images/successfull.png" alt="" class="img-responsive">
                            <h2>สั่งซื้อเรียบร้อย </h2>
                        </div>
                        <br>
                        <h3>โอนเงินผ่านบัญชีธนาคาร</h3>
                        <ul class="list-bank">
                            <li>
                                <table>
                                    <tr>
                                        <td><span class="bank1"></span></td>
                                        <td>ธนาคาร xxxx</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td><span class="bank2"></span></td>
                                        <td>ธนาคาร xxxx</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td><span class="bank3"></span></td>
                                        <td>ธนาคาร xxxx</td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td><span class="bank4"></span></td>
                                        <td>ธนาคาร xxxx</td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h1 class="title-total_cart">Total</h1>
                <div class="box-border">
                    <h4><strong>เลขที่ใบสั่งซื้อ xxxxx</strong></h4>
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
                                <label>
                                    <img src="images/icon-checked.jpg" alt="" height="18"> EMS ฟรี
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="table table-total_footer">
                        <tr>
                            <td><strong>รวม</strong></td>
                            <td><strong class="price">300</strong></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


    </div>

    <?php compo_footer(); ?>
</body>

</html>
