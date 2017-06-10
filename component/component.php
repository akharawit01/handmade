<?php
function compo_stylesheets() {
?>
	<!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="assets/css/app.css" rel="stylesheet">
<?php
}

function compo_header() {
?>
	<header class="container">
        <div class="row">
            <div class="col-lg-7 col-md-5"><a href="index.html"><img src="images/logo.png" class="img-responsive logo" alt="logo"></a></div>
            <div class="col-lg-5 col-md-7">
                <form role="search">
                <div class="input-group">
                    <input type="text" class="form-control search">
                    <div class="input-group-btn">
                        <button class="btn btn-default btn-search" type="submit">Search</button>
                    </div>
                </div>
                </form>
                <ul class="head-contact">
                    <li>
                        <button type="button" class="btn btn-default btn-block btn-login"><span class="glyphicon glyphicon-user"></span> เข้าสู่ระบบ or สมัครสมาชิก</button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-default btn-block btn-facebook">Log in with Facebook</button>
                    </li>
                    <li class="contact-head">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/icon-line.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                กดเพื่อ Add Line <br>@bekazii
                            </div>
                        </div>
                    </li>
                    <li class="contact-head">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/icon-phone.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                กดเพื่อโทร <br><a href="tel:0811111111">081-111-1111</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Menu</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">New Arrival</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Handbags</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
<?php
}

function compo_cart() {
?>
	<div class="cart">
        <a href="#">
            <img src="images/icon-cart.png" alt=""> <span>0 รายการ</span>
        </a>
    </div>
<?php
}

function compo_footer() {
?>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h1 class="text-uppercase">contact us</h1>
                    <ul class="footer-socials">
                        <li><img src="images/icon-footer-facebook.png" alt="facebook"> www.facebook.com/bekazii</li>
                        <li><img src="images/icon-footer-line.png" alt="line id"> @bekazii</li>
                        <li><img src="images/icon-footer-email.png" alt="my email"> customerservice@bekazii.com</li>
                        <li><img src="images/icon-footer-phone.png" alt="my phone number"> 081-111-1111 </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h1>บัญชีผู้ใช้ของฉัน</h1>
                    <ul>
                        <li><a href="#">ข้อมูลบัญชีผู้ใช้</a></li>
                        <li><a href="#">สมุดที่อยู่</a></li>
                        <li><a href="#">คำสั่งซื้อของฉัน</a></li>
                        <li><a href="#">ผู้สมัครสมาชิก</a></li>
                        <li><a href="#">จดหมายข่าว</a></li>
                    </ul>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h1>ข้อมูลข่าวสาร</h1>
                    <ul>
                        <li><a href="#">วิธีการสั่งซื้อ</a></li>
                        <li><a href="#">แจ้งโอน</a></li>
                        <li><a href="#">TRACK สถานะพัสดุ</a></li>
                        <li><a href="#">CELEB REVIEW</a></li>
                        <li><a href="#">STORY OF SIXX</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h1>บริการลูกค้า</h1>
                    <ul>
                        <li><a href="#">คำถามที่พบบ่อย (FAQ)</a></li>
                        <li><a href="#">ติดต่อเรา</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
<?php
}