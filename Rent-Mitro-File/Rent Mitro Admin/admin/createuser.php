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
                    User Administration
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="adminindex.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Admin</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <h3 class="box-title">Create new user</h3>

                <form action="createuserdb.php" method="POST">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required placeholder="Enter email">

                    </div>

                    <div class="form-group has-feedback">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" required placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>


                    <!-- SELECT2 EXAMPLE -->
                    <div class="form-group">



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control select2" style="width: 100%;" name="role">
                                        <option value="">Select role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Editor">Editor</option>
                                        <option value="Viewer">Viewer</option>
                                        
                                    </select>
                                </div>
                            </div>

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