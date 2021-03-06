<?php
    $conn = mysqli_connect("localhost","root","","rentmitro") or die(mysqli_error($con));
    session_start();

    $mail = $_SESSION["email"];
    
    $query = "SELECT * from customers where email='$mail';";
    $result = mysqli_query($conn, $query);

    $row_details = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Rent Mitro-Final</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/edit.css">




</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fas fa-chevron-up"></i></button>
    <!--Header Start-->
    <div class="header-div">
        <div class="row" id="top" style="padding-left:0px;padding-right:0px;margin-right:0px;margin-left:0px;">
            <div class="col-lg-3" style="padding-right:0px;margin-top: 0px;">
                <a href="index.html"><img src="assets\img\rmlogotranparent.png" class="logo"></a>
            </div>
            <div class="col-lg-6 d-lg-flex justify-content-lg-center align-items-lg-center"
                style="padding-right:0px;width:47%;">
                <div class="input-container">
                    <input type="text" class="input-field" placeholder="Search by title, author or ISBN here..." />
                    <button class="input-button"><i class="fa fas fa-search"></i></button>
                </div>


            </div>
            <div class="col-lg-3 d-lg-flex justify-content-lg-center align-items-lg-center" style="padding-right:0px;">

                <a href=""><button type="button" class="btn-account"><i class="fa fas fa-user-circle user-icon"
                            ;></i>Account</button></a>
                <a href="account.html" style="text-align: center;"><button type="button" class="btn-login"><i
                            class="fa fas fa-shopping-cart user-cart"></i>Cart</button></a>
                <a href="ad.html"><button type="button" class="btn-sell"><i
                            class="fa fas fa-plus"></i></i>Sell</button></a>
            </div>
        </div>
    </div>
    <!--Header End-->
    <!--Dropdown Bar Start-->
    <div class="d-lg-flex justify-content-lg-center align-items-xl-center dropdown-bar">
        <div class="dropdown">
            <a href="index.html" class="btn btn-primary dropdown-toggle"
                style="color: white; margin-left: 35px;">Home</a>

        </div>
        <div class="dropdown">
            <a href="multipleSellingPage.html" class="btn btn-primary dropdown-toggle"
                style="color: white; margin-left: 30px;" aria-expanded="false" type="button">All Product</a>

        </div>
        <div class="dropdown">
            <a href="blog.html" class="btn btn-primary dropdown-toggle" style="color: white; margin-left: 47px; ;"
                aria-expanded="false" type="button">Blog</a>

        </div>
        <div class="dropdown">
            <a href="contact-us.html" class="btn btn-primary dropdown-toggle" style="color: white;"
                aria-expanded="false" type="button">Contact Us</a>

        </div>
        <div class="dropdown">
            <a href="aboutus.html" class="btn btn-primary dropdown-toggle" style="color: white;" aria-expanded="false"
                type="button">About Us</a>

        </div>
    </div>
    <!--Dropdown Bar End-->
    <br />

    <div class="edit_heading">Edit info</div>
    <br />
    <div class="box">
        <form action="update_form.php" method="POST">
            <div class="formHead">Basic Info</div>
            <span class="headingCaption">Account / edit profile </span>&nbsp; <a href="account.html">
                <span>Back</span></a>
            <hr>
            <label>Full Name<span class="marks">*</span></label> <br />
            <input class="input_field" value="<?php echo $row_details['fullname']?>" type="text" name="fullname"><br />
            <div class="moreInfo"> *Mention your full name</div>
            <div class="inputlimit">0/70</div>
            <br />
            <br />

            <label>Username<span class="marks">*</span></label> <br />
            <input class="input_field" type="text" value="<?php echo $row_details['username']?>" name="username">
            <br />
            <div class="moreInfo"> *Your will be recognize by your username</div>
            <div class="inputlimit">0/70</div>
            <br />
            <br />
            <label>Date Of Birth<span class="marks">*</span></label><br />
            <input type="date" value="<?php echo $row_details['dob']?>" name="dob">
            <br />
            <br />
            <label>New Password<span class="marks">*</span>&nbsp;</label><br /> 
            <input class="input_field" value="<?php echo $row_details['password1']?>" type="password" name="newPassword">
            <br />
            <div class="moreInfo"> *It should contain 8-20 character</div>
            <div class="inputlimit">0/20</div><br />
            <div class="moreInfo"> *It should letter,numbers and special characters</div>
            <br />
            <br />
            <label>Confirm Password<span class="marks">*</span></label><br /> 
            <input class="input_field" type="password" value="<?php echo $row_details['password2']?>" name="confirmPassword"><br />
            <div class="moreInfo"> *It should be same as your new password</div>
            <div class="inputlimit">0/20</div><br />
            <br />
            <label>Gender<span class="marks">*</span></label><br />

            <input type="radio" name="gender" value="male" <?php echo ($row_details['gender']== 'male') ? "checked" : "" ;  ?>/> Male
            <br />
            <input type="radio" name="gender" value="female" <?php echo ($row_details['gender']== 'female') ? "checked" : "" ;  ?>/> Female<br>
            <br />
            <br />
            <div class="formHead">Contact Info</div>
            <hr>
            <label>Mobile<span class="marks">*</span></label><br />
            <input class="input_field" type="text" name="mobile" value="<?php echo $row_details['mob']?>" placeholder="eg:9999999999" /><br />
            <div class="moreInfo"> </div>
            <div class="inputlimit">0/10</div><br />
            <label>Email<span class="marks">*</span></label><br />
            <input class="input_field" type="text" name="email" value="<?php echo $row_details['email']?>" placeholder="eg:abc@xyz.com" />
            <br />
            <div class="moreInfo"> </div>
            <div class="inputlimit">0/30</div>
            <br />
            <input type="submit" class="sbutton" name="submit">
        </form>

    </div>
    <!-- footer-div-->
    <div class="footer-div" style="margin-right:0px;margin-top: 30px;">
        <div class="row footer-row">
            <div class="col-3 footer-col footer-col-1">
                <h4 class="footer-headings footer-headings-1">Get to know us</h4>
                <ul class="footer-list">
                    <li class="footer-li-1"><a href="#" class="footer-link footer-link-1">About Us</a></li>
                    <li class="footer-li-1"><a href="#" class="footer-link footer-link-2">Careers</a></li>
                    <li class="footer-li-1"><a href="blog.html" class="footer-link footer-link-3">Blog</a></li>
                    <li class="footer-li-1"><a href="contact-us.html" class="footer-link footer-link-4">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-3 footer-col footer-col-2">
                <h4 class="footer-headings footer-headings-2">Connect with us</h4>
                <ul class="footer-list">
                    <li class="footer-li-2"><a href="#" class="footer-link footer-link-1">Twitter</a></li>
                    <li class="footer-li-2"> <a href="#" class="footer-link footer-link-2">Facebook</a></li>
                    <li class="footer-li-2"><a href="#" class="footer-link footer-link-3">Instagram</a></li>
                </ul>

            </div>
            <div class="col-3 footer-col footer-col-3">
                <h4 class="footer-headings footer-headings-3">Help</h4>
                <ul class="footer-list">
                    <li class="footer-li"><a href="#" class="footer-link footer-link-1">Payment</a></li>
                    <li class="footer-li"> <a href="#" class="footer-link footer-link-2">Shipping</a></li>
                    <li class="footer-li"><a href="#" class="footer-link footer-link-3">Return</a></li>
                    <li class="footer-li"><a href="#" class="footer-link footer-link-4">FAQ</a></li>
                </ul>

            </div>
            <div class="col-3 footer-col footer-col-4">
                <h4 class="footer-headings footer-headings-4">Policies</h4>
                <ul class="footer-list">
                    <li class="footer-li"><a href="#" class="footer-link footer-link-1">Privacy Policy</a></li>
                    <li class="footer-li"> <a href="#" class="footer-link footer-link-2">Terms Of Use</a></li>
                    <li class="footer-li"><a href="#" class="footer-link footer-link-3">Secure Shopping</a></li>
                    <li class="footer-li"><a href="#" class="footer-link footer-link-4">Copyright Policy</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- footer-div-end-->










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</body>

</html>
