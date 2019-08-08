<?php
include 'inc/db.php';
include 'inc/functions.php';
include 'inc/sessions.php';
include 'inc/head.php';

if (isset($_POST['register'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone = $_POST['phone_number'];
  $id_number = $_POST['id_number'];
  $country = $_POST['country'];
  $county = $_POST['county'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];

  $image = '';
  if ($_FILES['image']['name'] != '') {
    $image = upload_image();
  }


  if (empty($first_name) || empty($last_name) || empty($phone) || empty($country) || empty($county) || empty($city) || empty($image) || empty($gender)) {
    $errors[] = 'All fields are required';
  }

  if (empty($errors)) {
    $freelancer_id = rand(0, 100000);
    $_SESSION["freelancer_id"] = $freelancer_id;


    $insert = $db->query("INSERT INTO freelancer (`freelancer_id`,`first`,`last`,`phone`,`id_number`,`country`,`county`,`city`,`image`,`gender`) 
                        VALUES( '$freelancer_id','$first_name','$last_name','$phone','$id_number','$country','$county','$city','$image','$gender' ) ");
    if ($insert) {
      $_SESSION['successMessage'] = 'Your details have been captured successfully! Please enter your business particulars.';
      redirect_to('business.php');
    }
  }
}
?>

<body id="top">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <?php include 'inc/nav.php'; ?>

    <!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">START YOUR JOURNEY TODAY</h1>
              <p>Find your dream jobs in our powerful career website template.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <a data-fancybox data-ratio="2" href="#" class="block__96788">
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-6 ml-auto">
            <h2 class="section-title mb-3">LOGIN</h2><br>
            <?php
            echo errorMessage();
            echo successMessage();
            if (!empty($errors)) {
              echo display_errors($errors);
            }
            ?>

            <div class=" row form">
              <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="text" class="form-control" id="inputEmail" placeholder=" E.g.john@gmail.com">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="password">Password</label>
                    <br>
                    <input name="password" type="password" class="form-control" id="inputEmail4" placeholder="*********">
                  </div>
                </div>
                <br>
                <button type="submit" name="login" class="btn btn-primary btn-mine">Login</button>
              </form>
            </div>
          </div>

        </div>
      </div>
  </div>
  </section>
  <br><br><br><br><br><br>



  <?php include 'inc/footer.php'; ?>

  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/custom.js"></script>


</body>

</html>