<!DOCTYPE html>
<html>

<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
include('adminpartials/header.php');
include('adminpartials/aside.php');






$host = "localhost";
$username = "root";
$password = "";
$dbname = "rentmitro";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





// Create connection

$id = $_GET['id'];
$query = "SELECT * from customers where id='" . $id . "'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);


if (isset($_POST['update'])) // when click on Update button
{
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $password1 = $_REQUEST['password1'];
    $password2 = $_REQUEST['password2'];

    $edit = "UPDATE customers set fullname='$fullname', email='$email' ,password1='$password1',password2='$password2' where id='$id'";

    if (mysqli_query($conn, $edit)) {

        echo '<script type="text/javascript">
    
         alert("Record updated successfully !");
          window.location.href = "totalusers.php";
          </script>';
    } else {
        echo mysqli_error($conn);
    }
}

$conn->close();
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
                    <li><a href="adminindex.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">User administration</li>
                </ol>
            </section>
            <section class="content">
                <div class="form">

                    <h1>Update Record</h1>


                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputusername">Full name</label>
                            <input type="text" class="form-control" id="exampleInputusername" placeholder="Enter full name" name="fullname" value="<?php echo $row['fullname']; ?>">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $row['email']; ?>">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password1" value="<?php echo $row['password1']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Re-enter password" name="password2" value="<?php echo $row['password2']; ?>">
                        </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                </div>



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