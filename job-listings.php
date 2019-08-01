<?php
include 'inc/db.php';
include 'inc/functions.php';
include 'inc/head.php';
if (isset($_GET['search'])) {
  $title = $_GET['title'];
  $location = $_GET['location'];
  $type = $_GET['type'];
  $query = "SELECT * 
              FROM  freelancer JOIN business_profile
              on business_profile.job_category LIKE '%$title%' AND 
                                      business_profile.duration LIKE '%$type%' ";
} else {
  $query = "SELECT * 
              FROM  freelancer INNER JOIN business_profile
              ON  freelancer.freelancer_id =  business_profile.freelancer_id";
}


$queryJobs = $db->query($query);
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
              <h1 class="text-white font-weight-bold">Job Listings</h1>
              <p>Find your dream jobs in our powerful career website template.</p>
            </div>
          </div>
        </div>
      </div>


    </section>



    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2"><?php if (mysqli_num_rows($queryJobs) < 1) : ?>
                <p>Sorry. No results to Display</p>
              <?php endif; ?></h2>
          </div>
        </div>


        <div class="mb-5">
          <?php while ($jobs = mysqli_fetch_assoc($queryJobs)) : ?>

            <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">

              <div class="col-md-2">
                <a href="job-single.php?job_id=<?= $jobs['freelancer_id']; ?>"><img src="images/freelancers/<?= $jobs['image'] ?>" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-md-4">
                <span class="badge badge-primary px-2 py-1 mb-3"><?= $jobs['duration'];  ?></span>
                <h2><a href="job-single.php?job_id=<?= $jobs['freelancer_id']; ?>"><?= $jobs['job_category'] ?></a> </h2>
                <p class="meta"> <strong>
                  </strong> <strong></strong>
                </p>
              </div>
              <div class="col-md-3 text-left">
                <h3><?= $jobs['county'] ?></h3>
                <span class="meta"><?= $jobs['country'] ?></span>
              </div>
              <div class="col-md-3 text-md-right">
                <strong class="text-black"> <?= money($jobs['salary']); ?></strong>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

        <div class="row pagination-wrap">
          <!-- 
          <div class="col-md-6 text-center text-md-left">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Previous</a>
              <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div> -->
        </div>

      </div>
    </section>




    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
              impedit.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>

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

  <!-- <script src="js/bootstrap-select.min.js"></script> -->

  <script src="js/custom.js"></script>


</body>

</html>