<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "rentmitro";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT email,role FROM admin WHERE email='".$_SESSION['email']."'";


$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


while ($row = mysqli_fetch_assoc($result)) {
  $role = $row['role'];
}
if ($role == 'Admin') {
?>




  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active">
          <a href="adminindex.php">
            <i class="fa fa-th"></i> <span>Dashboard</span>

          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user-secret"></i><span>User Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="totaluser.php"><i class="fa fa-users"></i> All Users</a></li>
            <li><a href="createuser.php"><i class="fa fa-user-plus"></i> Add new User</a></li>

          </ul>
        </li>





        




        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-book"></i><span>Book Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="products.php"><i class="fa fa-circle-o"></i> Add new book</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Delete book</a></li>
            <li><a href="view_books.php"><i class="fa fa-circle-o"></i> Update book</a></li>
            <li><a href="view_approved.php"><i class="fa fa-circle-o"></i> Approved books</a></li>
            <li><a href="view_denied.php"><i class="fa fa-circle-o"></i> Denied books</a></li>
          </ul>
        </li>
<li> <a href="ads.php">
            <i class="fa fa-fw fa-send"></i><span>Ads Requests</span>

          </a></li>
       

        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-users"></i> <span>Customer Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="active"><a href="totalcustomers.php"><i class="fa fa-users"></i> All customers</a></li>
            <!-- <li><a href="addcustomer.php"><i class="fa fa-user-plus"></i>Add new customer</a></li> -->

          </ul>
        </li>

        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li>
          <a href="Editor/TextEditor/Index.html">
            <i class="fas fa-blog"></i><span>Blog </span>

          </a>
        </li>
        <li>
          <a href="contact.php">
            <i class="fa fa-fw fa-send"></i><span>Contact us </span>

          </a>
        </li>
       
        <li>
          <a href="#">
            <i class="fa fa-fw fa-sign-out"></i><span>Notifications </span>

          </a>
        </li>
        <li>
          <a href="adminpartials/logout.php">
            <i class="fa fa-fw fa-sign-out"></i><span>Sign out</span>

          </a>
        </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<?php
} elseif ($role == 'Viewer') {
?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active">
          <a href="adminindex.php">
            <i class="fa fa-th"></i> <span>Dashboard</span>

          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-users"></i> <span>Customer Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="active"><a href="viewcustomers.php"><i class="fa fa-users"></i> Total customers</a></li>
            

          </ul>
        </li>

        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li>
          <a href="contact.php">
            <i class="fa fa-fw fa-send"></i><span>Contact us </span>

          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-fw fa-sign-out"></i><span>Notifications </span>

          </a>
        </li>
        <li>
          <a href="adminpartials/logout.php">
            <i class="fa fa-fw fa-sign-out"></i><span>Sign out</span>

          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<?php
}
?>