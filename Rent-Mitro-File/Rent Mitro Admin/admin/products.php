<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
include('adminpartials/header.php');
include('adminpartials/aside.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminindex.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Modification</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Book name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="book_name" required placeholder="Enter book name">
    <small id="emailHelp" class="form-text text-muted">Book name must be specific.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Book ISBN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="book_ISBN" required  placeholder="Enter book ISBN">
    <small id="emailHelp" class="form-text text-muted">Book ISBN must be specific.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Book category</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="book_category" required placeholder="Enter book category">
   
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="book_price" required placeholder="Enter book price">
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlFile1">Book image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="book_image" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Book description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="book_description" required rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
include('adminpartials/footer.php');


?>
</body>
</html>
