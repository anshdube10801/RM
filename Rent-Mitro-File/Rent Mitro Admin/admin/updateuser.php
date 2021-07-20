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
$query = "SELECT * from admin where id='" . $id . "'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);


if (isset($_POST['update'])) // when click on Update button
{
   
    $email = $_REQUEST['email'];
    
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];

    $edit ="UPDATE admin set  email='$email' ,password='$password' ,role='$role' where id='$id'";

    if (mysqli_query($conn, $edit)) {

        echo '<script type="text/javascript">
    
         alert("Record updated successfully !");
          window.location.href = "totaluser.php";
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
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $row['email']; ?>" required placeholder="Enter email">

                        </div>




                        <!-- SELECT2 EXAMPLE -->
                        
                            <div class="form-group has-feedback">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" required placeholder="Password" name="password" value="<?php echo $row['password']; ?>">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>

                            <div class="form-group">



<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Role</label>
            <select class="form-control select2" style="width: 100%;" name="role">
                <option class="selected"><?php echo $_SESSION['role']?></option>
                <option value="Admin">Admin</option>
                <option value="Editor">Editor</option>
                <option value="Viewer">Viewer</option>
                
            </select>
        </div>
    </div>

</div>

                            <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
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