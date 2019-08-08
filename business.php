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

    <title> RECRUITMENT PORTAL</title>

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

                    <!-- Content Row -->


                    <!-- QUICK MENU -->
                    <BR>
                    <div class="headline text-center">
                        <!-- <h2> QUICK ACCESS</h2> -->
                    </div>

                    <br>
                    <div class="container wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                                <a data-fancybox data-ratio="2" href="#" class="block__96788">
                                    <span class="play-icon"><span class="icon-play"></span></span>
                                    <img src="images/man.jpg" alt="Image" class="img-fluid img-shadow">
                                </a>
                            </div>
                            <div class="col-lg-6 ml-auto">
                                <h2 class="section-title mb-3">Business Profile</h2><br>
                                <div class=" row form">
                                    <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                        <?php
                                        echo errorMessage();
                                        echo successMessage();
                                        if (!empty($errors)) {
                                            echo display_errors($errors);
                                        }
                                        ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-11">
                                                <label for="inputEmail4">Job Category</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="job_category" required>
                                                    <option value="Mechanic">Mechanic</option>
                                                    <option value="Floor Repir">Floor Repir</option>
                                                    <option value="Painter">Painter</option>
                                                    <option value="House Girl">House Girl</option>
                                                    <option value="Chef">Chef</option>
                                                    <option value="Electrician">Electrician</option>
                                                    <option value="">Pest Control</option>
                                                    <option value="Waiter">Waiter</option>
                                                    <option value="Casual worker">Casual worker</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-11">
                                                <label for="inputEmail4">Job Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="job_description" rows="3"></textarea>
                                            </div>

                                            <div class="form-group col-md-7">
                                                <label for="inputAddress">Duration</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                                                    <option value="">Choose...</option>
                                                    <option value="Full-Time">Full-Time</option>
                                                    <option value="Part-Time">Part-Time</option>
                                                    <option value="Free-Lancer">Free-Lancer</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4">Salary (Kshs) per month</label>
                                                <input type="number" class="form-control" id="inputPassword4" placeholder="xxxx" name="salary" required>
                                            </div>
                                        </div>
                                        <br><br>
                                        <button type="submit" name="business" class="btn btn-primary btn-mine">Submit</button>
                                    </form>
                                </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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