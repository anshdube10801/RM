<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
include('adminpartials/header.php');
include('adminpartials/aside.php');

?>


<?php
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

$sql = "SELECT id,name,email,phone,msg FROM contactus";
$result = $conn->query($sql);

$conn->close();
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Contact us 
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="adminindex.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Contact us</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All messages</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>ID</th>
                                    <th>Name</th>
                                    
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    
                                   

                                </tr>
                            </thead>
                            <tbody>

                                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                                <?php   // LOOP TILL END OF DATA  
                                while ($rows = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['id']; ?></td>
                                        <td><?php echo $rows['name']; ?></td>
                                        <td><?php echo $rows['email']; ?></td>
                                        <td><?php echo $rows['phone']; ?></td>
                                        <td {white space:pre} width:100px><?php echo $rows['msg']; ?></td>
                                        </tr>

                                <?php
                                }
                                ?>



                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </div>




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include('adminpartials/footer.php');


    ?>
</body>

</html>