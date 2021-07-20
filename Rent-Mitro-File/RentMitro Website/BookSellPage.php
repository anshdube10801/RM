<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "rentmitro";


  $connect = mysqli_connect($host, $user, $password, $dbname);
  if (mysqli_connect_errno()) {
    echo "No connection";
  }
  
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
  <link rel="stylesheet" href="assets/CSS/BookSellPage.css">
  <script>

    
  </script>
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
        <a href="ad.html"><button type="button" class="btn-sell"><i class="fa fas fa-plus"></i></i>Sell</button></a>
      </div>
    </div>
  </div>
  <!--Header End-->
  <!--Dropdown Bar Start-->
  <div class="d-lg-flex justify-content-lg-center align-items-xl-center dropdown-bar">
      <div class="dropdown" >
          <a href="index.html" class="btn btn-primary dropdown-toggle" style="color: white; margin-left: 35px;"  >Home</a>

      </div>
      <div class="dropdown" >
          <a href="multipleSellingPage.html" class="btn btn-primary dropdown-toggle" style="color: white; margin-left: 30px;"   aria-expanded="false" type="button">All Product</a>

      </div>
      <div class="dropdown" >
          <a href="blog.html" class="btn btn-primary dropdown-toggle" style="color: white; margin-left: 47px; ;"  aria-expanded="false"  type="button">Blog</a>

      </div>
      <div class="dropdown" >
          <a href="contact-us.html" class="btn btn-primary dropdown-toggle" style="color: white;" aria-expanded="false" type="button">Contact Us</a>

      </div>
      <div class="dropdown" >
          <a href="aboutus.html" class="btn btn-primary dropdown-toggle" style="color: white;" aria-expanded="false"  type="button">About Us</a>

      </div>
  </div>
  <!--Dropdown Bar End-->

  <h1>POST YOUR AD</h1>

  <form action="insert_book.php" method="POST">
    <div class="form-container">

      <div>
        <h4 style="margin-top: 10px;text-align: left;">
          <span style="margin-left: 20px;">SELECTED CATEGORY</span>
        </h4>
      </div>
     
      <div style="text-align:left;margin-top: 30px;border-bottom: solid 1px #e5e7eb;">
        <p style="display: inline-block;margin-left: 20px;color:gray;"><span>Books / Category</span></p>
        <a href="ad2.html" class="change-category-link">Change</a>
      </div>
      <div class="include-details-div">
        <h5 class="include-details-header"> INCLUDE SOME DETAILS</h5>
        <div class="ad-title-div">
          <label for="" class="ad-title-label">Ad Title *</label>
          <input type="text" name="ad_title" required class="ad-title-input">
          <span class="ad-title-warning">
            Mention the key features of your item (e.g. brand, model, age, type)</span>
          <span class="ad-title-limit">0/70</span>
        </div>
        <div class="book-title-div">
          <label for="" class="book-title-label">Book Title *</label>
          <input type="text" name="book_title" required class="book-title-input">
          <span class="book-title-warning">
            Mention the title of your book.</span>
          <span class="book-title-limit">0/70</span>
        </div>
        <div class="author-name-div">
          <label for="" class="author-name-label">Author Name *</label>
          <input type="text" name="author_name" required class="author-name-input">
          <span class="author-name-warning">
            Mention the name of the author</span>
          <span class="author-name-limit">0/70</span>
        </div>
        <div class="ISBN-number-div">
          <label for="" class="ISBN-number-label">ISBN Number *</label>
          <input type="text" name="ISBN_number" required class="ISBN-number-input">
          <span class="ISBN-number-warning">
            Mention the ISBN number of your book</span>
          <span class="ISBN-number-limit">0/70</span>
        </div>
      </div>

      <hr>


      <div class="additional-info-div">
        <h5 class="additional-info-header"> ADDITIONAL INFORMATION</h5>
        <div class="date-of-purchase-div">
          <label for="" class="date-of-purchase-label">Year/Month Of Purchase *</label>
          <input type="date" name="date_purchase" required class="date-of-purchase-input">
          <span class="date-of-purchase-warning">
            Mention the period when this book was purchased</span>
          <span class="date-of-purchase-limit" style="padding-left: 100px;">0/70</span>
        </div>
        <div class="book-condition-div">
          <label for="" class="book-condition-label">Condition of the Book *</label>
          <input type="text" name="condition_book" required class="book-condition-input" style="height: 70px;">
          <!-- <textarea name="" id="" cols="30" rows="10" class="book-title-input"></textarea> -->
          <span class="book-condition-warning">
            Describe the condition of your book.</span>
          <span class="book-condition-limit" style="padding-left: 90px;">0/70</span>
        </div>


      </div>
      <hr>

      <div class="set-price-div">
        <h5 class="set-price-header"> SET A PRICE </h5>
        <div class="price-div">
          <label for="" class="price-label">Price *</label>
          <input type="text" name="price" required class="price-input">

        </div>
        <div class="book-quantity-div" style="margin-top: 10px;">
          <label for="" class="book-quantity-label">Quantity of Books *</label>
          <input type="number" name="quantity" required class="book-quantity-input" value="1">
          <!-- <textarea name="" id="" cols="30" rows="10" class="book-title-input"></textarea> -->

        </div>



      </div>
      <hr>

      <div class="review-details-div">
        <h5 class="review-details-header"> REVIEW YOUR DETAILS</h5>
        <div class="review-email-div">
          <label for="" class="review-email-label">Email *</label>
          <input type="text" name="email" required class="review-email-input">
          <span class="review-email-warning">
            Mention your email</span>
          <span class="review-email-limit" style="padding-left: 270px;">0/70</span>
        </div>
        <div class="contact-no-div">
          <label for="" class="contact-no-label">Contact Number *</label>
          <input type="text" name="contact" required class="contact-no-input">
          <span class="contact-no-warning">
            Mention your contact number</span>
          <span class="contact-no-limit">0/70</span>
        </div>
        <div class="zip-code-div">
          <label for="" class="zip-code-label">Zip Code *</label>
          <input type="text" name="zip_code" required class="zip-code-input">
          <span class="zip-code-warning">
            Mention your Zip Code</span>
          <span class="zip-code-limit" style="padding-left: 170px;">0/70</span>
        </div>













        <div style="text-align: left;">
          <button type="submit" class="btn btn-secondary sell-post-button">Post Now</button>
        </div>
      </div>


    </div>
  </form>













  <!-- footer-div-->
  <div class="footer-div" style="margin-right:0px;margin-top: 30px;">
    <div class="row footer-row">
      <div class="col-3 footer-col footer-col-1">
        <h4 class="footer-headings footer-headings-1">Get to know us</h4>
        <ul class="footer-list">
          <li class="footer-li-1"><a href="#" class="footer-link footer-link-1">About Us</a></li>
          <li class="footer-li-1"><a href="#" class="footer-link footer-link-2">Careers</a></li>
          <li class="footer-li-1"><a href="blog.html" class="footer-link footer-link-3">Blog</a></li>
          <li class="footer-li-1"><a href="contact-us.html" class="footer-link footer-link-4">Contact Us</a></li>
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
