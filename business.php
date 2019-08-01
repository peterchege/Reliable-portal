<?php
include_once 'inc/db.php';
include_once 'inc/functions.php';
include_once 'inc/sessions.php';

if (!isset($_SESSION['freelancer_id'])) {
  $_SESSION['errorMessage'] =  'Please Register.';
  redirect_to('create_account.php');
}

if (isset($_POST['business'])) {
  $freelancer_id = $_SESSION['freelancer_id'];
  $job_category = $_POST['job_category'];
  $job_description = $_POST['job_description'];
  $duration = $_POST['type'];
  $salary = $_POST['salary'];

  if (empty($freelancer_id) || empty($job_category) || empty($job_description) || empty($duration) || empty($salary)) {
    $errors[] = 'All fields are required';
  }
  if (empty($errors)) {
    $insertBusiness = $db->query("INSERT INTO business_profile(`freelancer_id`,`job_category`,`job_description`,`duration`,`salary`) 
      VALUES('$freelancer_id','$job_category','$job_description','$duration','$salary') ");
    if ($insertBusiness) {
      $_SESSION['successMessage'] = 'Profile created successfully!';
      unset($_SESSION['freelancer_id']);
      echo '<script>alert("success")</script>';
    } else {
      echo mysqli_error($insertBusiness);
    }
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Reliable Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mine.css">

</head>

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
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <?php include 'inc/nav.php'; ?>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image" style="background-image: url('images/.jpg');" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <!-- <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">START YOUR JOURNEY TODAY</h1>
              <p>Find your dream jobs in our powerful career website template.</p>
            </div> -->
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
  </section>
  <br><br><br><br><br><br>

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