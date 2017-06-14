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
        <img src="images/thestory.jpg" alt="..." width="100%">
        <h1 class="title text-uppercase">
            the story
        </h1>
        <div class="thestory">
            <article class="row">
                <div class="col-lg-6">
                    <h1 class="title-story">THIS WEEK’S FASHION FINDS</h1>
                    <p class="mess-story">
                        Whether you’re looking for the perfect classic or just a quick wardrobe fix, we guide you to the best steals right now. Check out this week's edit.
                        <a href="#" class="wp-story text-uppercase">read the story</a>
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="box-border box-pd-none">
                        <div class="row story">
                            <div class="col-sm-5">
                                <img class="img-responsive" src="images/story.jpg" alt="..." width="100%">
                            </div>
                            <div class="col-sm-7 text-center story-detail">
                                <p class="text-uppercase">everyday icon</p>
                                <h2>HOW TO DO UNDERSTATED CHIC LIKE A STREET STYLE STAR</h2>
                                <em>Buro 24/7’s Meruyert Ibragim shares her style secrets.</em>
                                <a href="#" class="text-uppercase">read the story</a>
                            </div>
                        </div>
                    </div>

                    <div class="box-border box-pd-none">
                        <div class="row story">
                            <div class="col-sm-5">
                                <img class="img-responsive" src="images/story.jpg" alt="..." width="100%">
                            </div>
                            <div class="col-sm-7 text-center story-detail">
                                <p class="text-uppercase">everyday icon</p>
                                <h2>HOW TO DO UNDERSTATED CHIC LIKE A STREET STYLE STAR</h2>
                                <em>Buro 24/7’s Meruyert Ibragim shares her style secrets.</em>
                                <a href="#" class="text-uppercase">read the story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <?php compo_footer(); ?>
</body>

</html>
