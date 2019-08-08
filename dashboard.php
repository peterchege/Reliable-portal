<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HR RECRUITMENT PORTAL</title>

    <?php include 'views/head_links.php'; ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        $page = basename($_SERVER['PHP_SELF']);
        include 'views/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'views/nav.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-600">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div
                                                class="text-sm-center font-weight-bold text-primary text-uppercase mb-2">
                                                NUMBER OF LIVE POST</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div
                                                class="text-sm-center font-weight-bold text-success text-uppercase mb-2">
                                                NUMBER OF APPLICANT</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm-center font-weight-bold text-info text-uppercase mb-2">
                                                EXPIRED JOB POST</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">680</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div
                                                class="text-sm-center font-weight-bold text-warning text-uppercase mb-2">
                                                job post</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">790</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                    <!-- QUICK MENU -->
                    <BR>
                    <div class="headline text-center">
                        <!-- <h2> QUICK ACCESS</h2> -->
                    </div>

                    <br>
                    <div class="container wrapper">
                        <div class="row">
                            <div class="col-3 box-card">
                                <a href="create_post.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/post.png" alt="">
                                            <h5>Create post</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 box-card">
                                <a href="live_post.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/application.png" alt="">
                                            <h5>View application</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-3 box-card">
                                <a href="archive_post.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/remove.png" alt="">
                                            <h5>Archived post</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-3 box-card">
                                <a href="approved_candidate_post.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/approved.png" alt="">
                                            <h5>Approved candidates</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-3 box-card">
                                <a href="applicant_database.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/apllicant.png" alt="">
                                            <h5>Applicant database</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3 box-card">
                                <a href="create_user.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/adduser.png" alt="">
                                            <h5>Create user</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-3 box-card">
                                <a href="user_database.php">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/profile.png" alt="">
                                            <h5>Users database</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-3 box-card">
                                <a href="">
                                    <div class="card box-cl mb-4 py-1 border-bottom-primary">
                                        <div class="card-body illustrat-icon text-center">
                                            <img src="img/logout.png" alt="">
                                            <h5>Communication</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'views/footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>