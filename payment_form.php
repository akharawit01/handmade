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
            แจ้งชำระเงิน
        </h1>

        <div class="row">
            <div class="col-md-8">
                <div class="box-border">
                    <h1>ข้อมูลการโอนเงิน</h1>
                    <form>
                        <div class="form-group">
                            <label for="OrderID">เลขที่การสั่งซื้อ</label>
                            <input type="text" class="form-control" id="OrderID">
                        </div>
                        <div class="form-group">
                            <label for="Bank">ช่องทางการโอน</label><br>
                            <div class="styled-select slate style-full">
                                <select class="style-respon">
                                    <option value="">เลือกช่องทางการโอน</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Amount">จำนวนเงินที่โอน</label>
                            <input type="text" class="form-control" id="Amount">
                        </div>
                        <div class="form-group">
                            <label for="datetimepicker">วันที่และเวลาที่โอน</label>
                            <input type="text" class="form-control date" id="datetimepicker">
                        </div>
                        <div class="form-group">
                            <label for="Photo">หลักฐานการโอน</label>
                            <input type="file" class="form-control custom-file-input" id="Photo">
                            <p class="help-block">[ไฟล์ jpg,gif,png,pdf ไม่เกิน 2MB] การแนบหลักฐานจะช่วยทำให้ตรวจสอบได้เร็วขึ้น</p>
                        </div>
                        <div class="text-center"><button class="btn btn-default btn-handmade" type="submit">ยืนยัน</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                    <div class="box-border thxu">
                        <div class="txt-middle text-center">
                            <h1 class="text-uppercase">Thank you for <br class="hidden-xs hidden-sm">your payment</h1>
                            <img src="images/icon-smy.jpg" alt="">
                            <hr>
                            <em>i'm sure you'll love it!</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php compo_footer(); ?>
</body>

</html>
