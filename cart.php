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
        <h1 class="text-center">
            Shopping cart
        </h1>

        <div class="row">
            <div class="col-md-8">
                <div class="box-border">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/slide.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="col-md-8">
                            <ul>
                                <li>Product name: xxxxxx</li>
                                <li>Price: $300</li>
                                <li>Color: White</li>
                                <li>Size: 30x30</li>
                            </ul>
                            <a class="btn btn-default" href="#" role="button">Link</a>
                            <div class="styled-select slate">
                              <select>
                                <option>Here is the first option</option>
                                <option>The second option</option>
                                <option>The third option</option>
                              </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-border">
                    
                </div>
            </div>
        </div>


    </div>

    <?php compo_footer(); ?>
</body>

</html>
