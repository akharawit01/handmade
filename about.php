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
    <div id="hero" class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/about1.jpg" alt="...">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <h1 class="title-about">Bekazii by Bekate</h1>
        <p class="text-center content_about">
            ผู้ผลิตและจัดจำหน่ายสินค้า รองเท้า กระเป๋า เสื้อผ้า แบรนด์ Bekazii ผลิตโดยวัตถุดิบชั้นดี ตัดเย็บปราณีตโดยช่างผู้ชำนาญงานพร้อมเสิร์ฟความสวยให้คุณสาวสาว ถึงบ้านแล้ววันนี้
        </p>

        <div class="row">
            <div class="col-sm-9 col-xs-12">
                <img src="images/about2.jpg" class="img-responsive" alt="...">
                <br class="hidden-lg hidden-md hidden-sm">
            </div>
            <div class="col-sm-3 col-xs-6">
                <img src="images/about3.jpg" class="img-responsive" alt="...">
                <br class="hidden-xs">
            </div>
            <div class="col-sm-3 col-xs-6">
                <img src="images/about4.jpg" class="img-responsive" alt="...">
            </div>
        </div>
    </div>

    <?php compo_footer(); ?>
</body>

</html>
