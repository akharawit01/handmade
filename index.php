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
                    <img src="images/slide.jpg" alt="...">
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
        <h1 class="title">
            หมวดหมู่สินค้า
        </h1>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6 pd-none">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/h1.jpg" alt="...">
                        <div class="overlay overlay1">
                            <h1 class="text-uppercase text-center clrgrey">new arrival</h1>
                            <p class="text-center">
                                <a href="#" class="shopnow1">Shop now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 pd-none">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/h2.jpg" alt="...">
                        <div class="overlay">
                            <h1 class="text-uppercase text-center">&nbsp;</h1>
                            <p class="text-center">
                                <a href="#" class="shopnow2">Shop now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pd-none">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/h3.jpg" alt="...">
                        <div class="overlay">
                            <h1 class="text-uppercase text-center">shoes</h1>
                            <p class="text-center">
                                <a href="#">Shop now >></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pd-none">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/h4.jpg" alt="...">
                        <div class="overlay">
                            <h1 class="text-uppercase text-center">clothing</h1>
                            <p class="text-center">
                                <a href="#">Shop now >></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pd-none">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/h5.jpg" alt="...">
                        <div class="overlay">
                            <h1 class="text-uppercase text-center">handbags</h1>
                            <p class="text-center">
                                <a href="#">Shop now >></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="title text-uppercase">
            the story
        </h1>
        <aside class="box-border thestory">
            <article class="row">
                <figure class="col-md-6"><img class="img-responsive" src="images/thestory.jpg" alt="..."></figure>
                <div class="col-md-6">
                    <h1 class="title-story">THIS WEEK’S FASHION FINDS</h1>
                    <p class="mess-story">
                        Whether you’re looking for the perfect classic or just a quick wardrobe fix, we guide you to the best steals right now. Check out this week's edit.
                        <a href="#" class="wp-story text-uppercase">read the story</a>
                    </p>
                </div>
            </article>
        </aside>

        <div class="row">
            <section class="col-md-4 about">
                <div class="thumbnail">
                    <h1 class="title-basic">ABOUT Bekazii</h1>
                    <img class="img-responsive" src="images/slide.jpg" alt="...">
                    <div class="caption">
                        <h3>Bekazii by Bekate</h3>
                        <p>ผู้ผลิตและจัดจำหน่ายสินค้า รองเท้า กระเป๋า เสื้อผ้า แบรนด์ Bekazii ผลิตโดยวัตถุดิบชั้นดี ตัดเย็บปราณีตโดยช่างผู้ชำนาญงานพร้อมเสิร์ฟความสวยให้คุณสาวสาว ถึงบ้านแล้ววันนี้

                            <a href="#" class="text-uppercase">read more</a>
                        </p>
                    </div>
                </div>
            </section>
            <section class="col-md-8 review">
                <div class="thumbnail">
                    <h1 class="text-uppercase title-basic">Customer review</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="thumbnails">
                                <li class="thumbnail right-caption">
                                    <img src="images/slide.jpg" alt="">
                                </li>
                                <li class="caption right-caption">
                                    <h4>Thumbnail label </h4>
                                    <p>สั่งไปได้ไวมากคะ ตอบ ไอบีไว มากชอบคะ ส่งของเร็วไม่ต้องถามเลขแทรคก็ส่งให้เลยบริการดีมาก รองเท้านิ่มมากคะ มีคู่ต่อไปแน่นอน</p>
                                    <date>19 เมษายน 2017 เวลา 12:20 น.</date>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="thumbnails">
                                <li class="thumbnail right-caption">
                                    <img src="images/slide.jpg" alt="">
                                </li>
                                <li class="caption right-caption">
                                    <h4>Thumbnail label </h4>
                                    <p>สั่งไปได้ไวมากคะ ตอบ ไอบีไว มากชอบคะ ส่งของเร็วไม่ต้องถามเลขแทรคก็ส่งให้เลยบริการดีมาก รองเท้านิ่มมากคะ มีคู่ต่อไปแน่นอน</p>
                                    <date>19 เมษายน 2017 เวลา 12:20 น.</date>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="thumbnails">
                                <li class="thumbnail right-caption">
                                    <img src="images/slide.jpg" alt="">
                                </li>
                                <li class="caption right-caption">
                                    <h4>Thumbnail label </h4>
                                    <p>สั่งไปได้ไวมากคะ ตอบ ไอบีไว มากชอบคะ ส่งของเร็วไม่ต้องถามเลขแทรคก็ส่งให้เลยบริการดีมาก รองเท้านิ่มมากคะ มีคู่ต่อไปแน่นอน</p>
                                    <date>19 เมษายน 2017 เวลา 12:20 น.</date>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="thumbnails">
                                <li class="thumbnail right-caption">
                                    <img src="images/slide.jpg" alt="">
                                </li>
                                <li class="caption right-caption">
                                    <h4>Thumbnail label </h4>
                                    <p>สั่งไปได้ไวมากคะ ตอบ ไอบีไว มากชอบคะ ส่งของเร็วไม่ต้องถามเลขแทรคก็ส่งให้เลยบริการดีมาก รองเท้านิ่มมากคะ มีคู่ต่อไปแน่นอน</p>
                                    <date>19 เมษายน 2017 เวลา 12:20 น.</date>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="wp-review">อัลบั้มรูปรีวิวลูกค้า >></a>
                </div>
            </section>
        </div>
    </div>

    <?php compo_footer(); ?>
</body>

</html>
