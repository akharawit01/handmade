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
                <a href="#"><img src="images/icon-step_doing.png" alt="" width="25"></a><br>
                <strong>Social Profiles</strong>
            </li>
            <li>
                <a href="#"><img src="images/icon-step_notactive.png" alt="" width="25"></a><br>
                <strong>Personal Details</strong>
            </li>
        </ul>

        <div class="row">
            <div class="col-md-8">
                <ul class="list-cart_pro">
                    <li class="box-border">
                        <h1>ที่อยู่ในการจัดส่ง</h1>

                        <form action="ordered01.php">
                            <div class="form-group">
                                <label for="FirstnameLastname">ชื่อ-สกุลผู้รับ</label>
                                <input type="text" class="form-control" id="FirstnameLastname">
                            </div>
                            <div class="form-group">
                                <label for="Address">ชื่อ-สกุลผู้รับ</label>
                                <input type="text" class="form-control" id="Address">
                            </div>
                            <div class="form-group">
                                <div class="styled-select slate style-respon">
                                    <select class="style-respon">
                                        <option value="">เลือกจังหวัด</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="styled-select slate style-respon">
                                    <select class="style-respon">
                                        <option value="">เลือกเขต/อำเภอ</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>

                                <div class="styled-select slate style-respon">
                                    <select class="style-respon">
                                        <option value="">เลือกตำบล</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Postcode">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="Postcode">
                            </div>
                            <div class="form-group">
                                <label for="Tel">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="Tel">
                            </div>
                            <div class="form-group">
                                <label class="label-w600">ข้อมูลผู้ชื้อ (สำหรับแจ้งเตือน)</label>
                                <br>
                                <label for="Email">อีเมล</label>
                                <input type="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group">
                                <label for="Tel">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="Tel">
                            </div>

                            <div class="form-group">
                                <label class="label-w600" for="Tel">เลือกช่องทางการโอน</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="posttype" value="1" checked> โอนเงินผ่านบัญชีธนาคาร
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="posttype" value="2"> โอนเงินผ่านบัตรเครดิต
                                    </label>
                                </div>
                            </div>

                            <div class="text-center"><button class="btn btn-default btn-handmade" type="submit">ยืนยัน</button></div>

                        </form>
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
