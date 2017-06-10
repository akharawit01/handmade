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
            สินค้าใหม่
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

        <div class="text-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


    </div>

    <?php compo_footer(); ?>
</body>

</html>
