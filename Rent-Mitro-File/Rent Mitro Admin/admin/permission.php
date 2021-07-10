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
                    Set permissions
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">

                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- checkbox -->
                        <div class="form-group">
                            <h3>Viewer</h3>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    All customers
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Notifications
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Mailbox
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Contact us
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                    <div class="form-group">
                            <h3>Editor</h3>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    All customers
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Notifications
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Mailbox
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Contact us
                                </label>
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