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
                    Customer Administration
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="adminindex.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Customer administration</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header">



                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">User Registration form</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <form action="addcustomerdb.php" method="POST" role="form">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputusername">Full name</label>
                                                <input type="text" class="form-control" id="exampleInputusername" placeholder="Enter full name" name="fullname">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                                            </div>




                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword2">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Re-enter password" name="password2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword2">Mobile number</label>
                                                <input type="" class="form-control" id="exampleInputPassword2" placeholder="Re-enter password" name="mob">
                                            </div>

                                           



                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <select class="form-control select2" style="width: 100%;" name="gender">
                                                                <option value="">Select gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="other">Other</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Occupation</label>
                                                            <select class="form-control select2" style="width: 100%;" name="occup">
                                                                <option value="">Select occupation</option>
                                                                <option value="student">Student</option>
                                                                <option value="teacher">Teacher</option>
                                                                <option value="other">Other</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword2">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Re-enter password" name="address">
                                                </div>

                                            </div>
                                            <!-- /.box-body -->

                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                            </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

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