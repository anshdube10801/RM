<?php
    $conn = mysqli_connect("localhost","root","christina@@","rentmitro") or die(mysqli_error($con));
    session_start();

    $mail = $_SESSION["email"];
    
    $query = "SELECT * from customers where email='$mail';";
    $result = mysqli_query($conn, $query);

    $row_details = mysqli_fetch_assoc($result);

    
    // echo '<h2>'.$row_details['email'].'</h2>';
    // echo '<h2>'.$row_details['fullname'].'</h2>';
    // header("Location: scrap.php");
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
    <link rel="stylesheet" href="assets/CSS/myacc.css">



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

                <a href="account.html"><button type="button"  class="btn-account"><i
                            class="fa fas fa-user-circle user-icon" ;></i>Account</button></a>
                <a href="cart.html" style="text-align: center;"><button type="button" class="btn-login"><i
                            class="fa fas fa-shopping-cart user-cart"></i>Cart</button></a>
                <a href="ad.html"><button type="button" class="btn-sell"><i class="fa fas fa-plus"
                            ;></i></i>sell</button></a>
            </div>
        </div>
    </div>
    <!--Header End-->


    <hr>
    <div class="container">
        <div class="header">
            <div class="accInfo">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-fill bd-highlight accName"><img class="accImage" src="assets/img/a.jpg"
                            height="50px" width="50px">
                        Hello , <?php echo $row_details['fullname']?>
                    </div>
                    <div class="p-2 flex-fill bd-highlight notifications"><i class="fa fa-bell"
                            style="font-size:24px"></i>
                    </div>
                    <div class="p-2 flex-fill bd-highlight signOut">
                        <button type="button" onclick="window.location.href='logout.php'" class="btn btn-danger">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accDetails">

        <div class="login box">
            <div class="card animate_animated animate_backInLeft">
                <div class="cardInfo">
                    <div class="cardImg"><img class="accImage" c src="assets/img/a.jpg" alt="" width="100px"
                            height="100px"></div>
                    <div class="cardName">My info</div>
                    <div class="cardDescription">You can change your info</div>
                </div>
                <a href="#extend_myinfo"><button type="button" class="visit_btn" onclick="info()">visit</button></a>
            </div>
        </div>
        <div class="order box">
            <div class="card animate_animated animate_backInDown ">
                <div class="cardInfo">
                    <div class="cardImg"><img class="accImage" src="assets/img/order.png" alt="" width="100px"
                            height="100px">
                    </div>
                    <div class="cardName">Order Details</div>
                    <div class="cardDescription">You can track and change your order</div>
                </div>
                <a href="#extend_order"><button type="button" class="visit_btn" onclick="order()">visit</button></a>
            </div>

        </div>
        <div class="address box">
            <div class="card animate_animated animate_backInRight">
                <div class="cardInfo">
                    <div class="cardImg"><img class="accImage" c src="assets/img/address.jpeg" alt="" width="100px"
                            height="100px">
                    </div>
                    <div class="cardName">Address</div>
                    <div class="cardDescription">You can change your address</div>
                </div>
                <a href="#extend_address"><button type="button" class="visit_btn" onclick="address()">visit</button></a>
            </div>
        </div>

    </div>

    <br /><br />
    <div id="extend_myinfo">
        <div class="head_info">Personal Info</div>

        
        <div class="basicInfo">


            <h3>Basic Info</h3>
            <br />

            <div class="infoQuestion">Name</div>
            <div class="infoAns"><?php echo $row_details['fullname']?></div>

            <hr>
            <div class="infoQuestion"><img src="assets/img/username.svg" height="25px" width="25px" /> Username</div>
            <div class="infoAns"><?php echo $row_details['username']?></div>
            <hr>
            <div class="infoQuestion">Profile Pic</div>
            <div class="infoAns"><img assets/CSS/alt="user-image" height="100px" width="100px" /></div>
            <hr>
            <div class="infoQuestion">Gender</div>
            <div class="infoAns"><?php echo $row_details['gender']?></div>
            <hr>
            <div class="infoQuestion"><img src="assets/img/dob.svg" height="25px" width="25px" /> Birth Date</div>
            <div class="infoAns"><?php echo $row_details['dob']?></div>
        </div>
        <div class="contactInfo">

            <h3>Contact Info</h3>
            <br>
            <div class="infoQuestion"><img src="assets/img/email.svg" height="25px" width="25px" />&nbsp; Email</div>
            <div class="infoAns"><?php echo $row_details['email']?></div>
            <hr>
            <div class="infoQuestion"><img src="assets/img/mobile.svg" height="25px" width="25px" /> Mobile</div>
            <div class="infoAns"><?php echo $row_details['mob']?></div>
            <hr>
            <div class="infoQuestion"><img src="assets/img/address.svg" height="25px" width="25px" /> Address</div>
            <div class="infoAns"><?php echo $row_details['address']?></div>

        </div>
        <br />
        <br />

        <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">
            Edit info
        </button>

      
        <form action='view_bookdetails.php'>
            <input type='submit' value='VIEW/EDIT DETAILS'>
        </form>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Verify It's you !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="verify_login.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><i class="fa fa-envelope"></i>&nbsp;Email
                                    address</label>
                                <input type="email" name="verify_email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" required>
                                <small id="emailHelp" class="form-text text-muted">*We never share your email and
                                    pasword.</small>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="exampleInputPassword1"><i class="fa fa-lock"></i>&nbsp;Password</label>
                                <input type="password" name="verify_password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" required>
                            </div>
                            <br />
                            <a href="">Forgot Password ?</a> | <a href="">Don't have an account</a>
                            <div class="modal-footer">
                            <button type="submit" id="login" class="btn btn-primary login-button" style="background-color:#051f1b"><a style="text-decoration: none; color: white;">Next</a></button>
                                <!-- <div id="editButton"><a class="editLink">Next</a></div> -->
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>


    </div>

    <div id="extend_order">
        <div class="head_info">My Orders</div>
    </div>

    <div id="extend_address">
        <div class="head_info">Address</div>
        <br />
        <h1 class="heading">Edit Address</h1>
        <br />

        <div class="address_container">

            <label>Flat, House no.,Building<span class="marks">*</span></label> <br /><input type="email"
                class="form-control" id="exampleFormControlInput1">
            <br />
            <label>Area,Colony,Street,Sector<span class="marks">*</span></label> <br /><input type="email"
                class="form-control" id="exampleFormControlInput1">
            <br />
            <label>Landmark e.g near Apollo Hospital<span class="marks">*</span></label> <br /><input type="email"
                class="form-control" id="exampleFormControlInput1">
            <br />
            <label>Town/city<span class="marks">*</span></label> <br /><input type="email" class="form-control"
                id="exampleFormControlInput1">
            <br />

            <br />
            <select class="form-select" aria-label="Default select example">
                <option selected>State <span class="marks">*</span></option>
                <option value="1">Andra Pradesh</option>
                <option value="2">Assam</option>
                <option value="3">Bihar</option>
                <option value="4">Chandigarh</option>
                <option value="5">Chhattisgarh</option>
                <option value="6">Delhi</option>
                <option value="7">Goa</option>
                <option value="8">Gujrat</option>
                <option value="9">Haryana</option>
                <option value="10">Jammu & Kashmir</option>
                <option value="11">Karnatka</option>
                <option value="12">Odisha</option>
            </select><br>
            <label>Pin Code<span class="marks">*</span></label> <br /><input type="email" class="form-control"
                id="exampleFormControlInput1">
            <br />

            <select class="form-select" aria-label="Default select example">
                <option value="1"></option>
                <option selected>Select an Address Type *</option>
                <option value="2">Home(7 am-9pm delivery)</option>
                <option value="3">Office/Commercial(10 AM - 6PM delivery)</option>
            </select>
            <br />
            <br />

            <button class="sbutton">save</button>



        </div>

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

    <script src="script.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
</body>

</html>