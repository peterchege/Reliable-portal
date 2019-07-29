<?php include 'inc/head.php'; ?>

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
              <img src="images/man.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-6 ml-auto">
            <h2 class="section-title mb-3">CREATE AN ACCOUNT</h2><br>

            <div class=" row form">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">First name</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="john">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Last name</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="doe">
                  </div>
                  <br>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Phone number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="07xx 924 xxx">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Id Number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="x234xxxx">
                  </div>
                  <br>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Country</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="country">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">County</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="county">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">City</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="city">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group  col-md-3">
                    <label for="inputAddress2">Gender</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-mine">Sign in</button>
              </form>
            </div>
          </div>

        </div>
      </div>
  </div>
  </section>
  <br><br><br><br><br><br>




  <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
          <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis
            recusandae sequi excepturi corrupti.</p>
        </div>
      </div>
      <div class="row pb-0 block__19738 section-counter">

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="1930">0</strong>
          </div>
          <span class="caption">Candidates</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="54">0</strong>
          </div>
          <span class="caption">Jobs Posted</span>
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
          <span class="caption">Companies</span>
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