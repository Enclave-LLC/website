<!doctype html>
<html lang="en">
  <head>
    <?php include 'includes/head_items.php'?>

    <title>Enclave</title>
  </head>
  <body>
  <!-- Modal -->
  <?php include 'includes/modal.php'?>
    
    
    <!--Header of Page-->
    <div id="top" class="header-large">
      <?php include 'includes/nav.php';?>
      <div class="container-fluid text-white text-center">
        <div class="row">
          <div class="header-large-book col-12 col-sm-12 col-md-12 col-lg-7">
            <h1>Book</h1>
            <p>your event space with just a click</p>

            <h6>Stay in the loop</h6>
            <div class="input-group mb-3 shadow-sm">
              <input id="email" type="email" class="loop form-control" placeholder="Email" aria-label="Email" aria-describedby="Email">
              <div class="input-group-append">
                <!-- <span class="input-group-text" id="email"></span> -->
                <button class="btn bg-enclave btn-email" onclick="sendEmail()">Send</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-12 col-lg-5">
            <img class="img-fluid" src="assets/images/iPhone X-XS-11 Pro – 1@2x_iphonexspacegrey_portrait.png" alt="Phone with our logo">
          </div>
        </div>
      </div>
    </div>

    <!--Main Body of the Page-->

    <!--Features-->
    <div class="mb-5 text-enclave" id="features">
      <div class="container-sm mt-5 text-center">
        <h1 class="mb-5">Features</h1>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <img class="mb-3" src="assets/images/Layer_1_1_.svg" alt="Availability Image">
            <h2>Availability</h2>
            <p>
              The enclave app helps you check the availability of the event space on the day and time you want to have your event. It makes planning events much easier.
            </p>
          </div>

          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <img class="mb-3" src="assets/images/SvgjsG1008.svg" alt="">
            <h2>Pay Using App</h2>
            <p>
              Safely pay for your event space on time through the app and avoid the hustle of booking and paying through 3rd parties.
            </p>
          </div>

          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <img class="mb-3" src="assets/images/LINE EXPAND.svg" alt="">
            <h2>Refund Policy</h2>
            <p>
              If due to any happening your event cannot come off your money will be refunded based on the event center's refund policy (which will be available for check before 'booking).
            </p>
          </div>
        </div>
        
      </div>
    </div>

    <!--How It Works-->
    <div class="mb-5 text-enclave" id="how-it-works">
      <div class="container-sm text-center">
        <h1 class="mb-5">How It Works</h1>

        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 hit-d">
            <img class="mb-3" src="assets/images/21-Download.svg" alt="Availability Image">
            <h2>Download App</h2>
            <p>
              Get the app from the play store/app store.
            </p>
          </div>

          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <img class="mb-3" src="assets/images/SvgjsG1008.svg" alt="">
            <h2>Sign Up</h2>
            <p>
              Create an account and follow through the onboarding process
            </p>
          </div>

          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <img class="mb-3" src="assets/images/LINE EXPAND.svg" alt="">
            <h2>Book & Pay</h2>
            <p>
              Start booking your event space with ease.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- What to Expect -->
    <div class="mt-5 mb-4 text-enclave" id="what-to-expect">
      <div class="container-sm">
        <div class="row">
          <div class="wte col-12 col-sm-12 col-md-6 col-lg-6">
            <h1>What To Expect</h1>

            <p>
              The enclave is app coming to change how we book event spaces traditionally. 
              The stress and hustle involved is trying to get a perfect event space at an 
              affordable rate, date, time and at preferred location is about to come to an end. 
              The app is going to help the average person book and pay for an affordable yet decent 
              event space seamlessly.
            </p>

            <a href="#top" class="btn early-access-btn">Get early access</a>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="assets/images/enclave screen_nexus6p-portrait.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!--Footer of Page-->
    <?php include 'includes/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Axios -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>

    <!-- Main Script -->
    <script src="assets/scripts/main.js"></script>
  </body>
</html>