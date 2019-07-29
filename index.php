<?php
include 'inc/head.php';
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
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/large-1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">A Powerful Service Portal </h1>
              <p>Find your casual labourer in our web portal.</p>
            </div>
            <form method="get" action="job-listings.php?search" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input name="title" type="text" class="form-control form-control-lg" placeholder="Service title, keywords...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="location" class="form-control" required>
                    <option value="">Please choose</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Mombasa">Mombasa</option>
                    <option value="Kisumu">Kisumu</option>
                    <option value="Nakuru">Nakuru</option>
                    <option value="Kericho">Kericho</option>
                    <option value="Nyeri">Nyeri</option>
                    <option value="Machackos">Machackos</option>
                    <option value="Muranga">Muranga</option>
                    <option value="Turkana">Turkana</option>
                    <option value="Kajiado">Kajiado</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="type" class="form-control" required>
                    <option value="">Please choose</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Freelancer">Freelancer</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button name="search" type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</ name="search">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/large-1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Service Statistics</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis
              recusandae sequi excepturi corrupti.</p>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="1930">0</strong>
            </div>
            <span class="caption">Labourers</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="54">0</strong>
            </div>
            <span class="caption">Services Posted</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="120">0</strong>
            </div>
            <span class="caption">Jobs Filled</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="550">0</strong>
            </div>
            <span class="caption">Happy Customers</span>
          </div>


        </div>
      </div>
    </section>



    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">109,234 Job Listed</h2>
          </div>
        </div>


        <div class="mb-5">
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/mech1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Freelancer</span>
              <h2><a href="job-single.php">Mechanic</a> </h2>
              <p class="meta">Publisher: <strong>Peter Chege</strong> Tag: <strong>Mechanic</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Nairobi</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">Ksh 1,000 &mdash; Ksh 1,500</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/garden1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">Gardener</a> </h2>
              <p class="meta">Publisher: <strong>John Kamau</strong> Tag: <strong>farmers</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Westlands</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">Ksh 5,000 &mdash; Ksh 10,000</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/man.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.php">Painting</a> </h2>
              <p class="meta">Publisher: <strong>Anthony Baru</strong> Tag: <strong>Designer</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Thika</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">Ksh 2,000 &mdash; Ksh 2,500</strong>
            </div>
          </div>
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/pest.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Freelancer</span>
              <h2><a href="job-single.php">Pest Control</a> </h2>
              <p class="meta">Publisher: <strong>Elijah Omondi</strong> Tag: <strong>Farming</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Kisumu</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">kSH 1,200 &mdash; ksh 1,6000</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-5.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">Floor Repair</a> </h2>
              <p class="meta">Publisher: <strong> Gilbert Njoronge </strong> Tag: <strong>Mansory</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Nairobi</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">Ksh 3,000 &mdash; Ksh 3,5000</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/floor.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">House Girl</a> </h2>
              <p class="meta">Publisher: <strong>Jane Wambui</strong> Tag: <strong>casual worker</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Kiambu</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">Ksh 5,000 &mdash; Ksh 6,000</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/sofa.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.php">Sofaset Repair</a> </h2>
              <p class="meta">Publisher: <strong>Geofrey Mwangi</strong> Tag: <strong>Carpenter</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Nairobi</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">Ksh 10,000 &mdash;Ksh 15,000</strong>
            </div>
          </div>

        </div>

        <div class="row pagination-wrap">

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
          </div>
        </div>

      </div>
    </section>




    <section class="site-section py-4 mb-5 border-top">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Our workers have been veted bt the following bodies</h2>
              </div>
            </div>

          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light pt-5 testimony-full">

      <div class="owl-carousel single-carousel">


        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <img class="img-fluid mx-auto" src="images/peterchege.png" alt="Image">
              <blockquote>
                <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores
                  repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;
                </p>
                <p><cite> &mdash; Richard Anderson</cite></p>
              </blockquote>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <img class="img-fluid mx-auto" src="images/peterchege.png" alt="Image">
              <blockquote>
                <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores
                  repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;
                </p>
                <p><cite> &mdash; Chris Peters</cite></p>
              </blockquote>
            </div>
          </div>
        </div>

      </div>

    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/large-1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job? Create an account with us today</h2>
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

  <script src="js/custom.js"></script>


</body>

</html>