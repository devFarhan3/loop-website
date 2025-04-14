<!-- header here -->
<?php include 'header.php'; ?>
<!-- ends -->

<div id="contact_page">
  <!-- story Section -->
  <section id="story" class="story section">
    <div class="container" data-aos="fade-up">
      <div class="row gx-3">
        <div class="col-lg-10 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Our mission</h3>

            <h2>We’re empowering the leaders in business and society by sparking their business with digital
              currencies.</h2>


            <p>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
              id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
              velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
              voluptatem.
            </p>

            <p>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
              id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
              velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
              voluptatem.
            </p>
          </div>
        </div>



      </div>
    </div>

  </section>
  <!-- /story Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section  pt-0">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">

        <div class="dots_imgss">
          <img src="assets/img/dots.svg" alt="dots" class="img-fluid">
        </div>
        <div class="col-lg-10">

          <form action="forms/contact.php" method="post" class="php-email-form cs_forms" data-aos="fade-up"
            data-aos-delay="200">
            <div class="row gy-2">

              <h5>We’ll be happy to
                help in any way we can!</h5>
              <div class="col-md-6 pe-lg-0">
                <input type="text" name="name" class="form-control" placeholder="Full name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="text" class="form-control" name="address" placeholder="Email address" required="">
              </div>

              <div class="col-md-6 pe-lg-0">
                <input type="text" name="name" class="form-control" placeholder="Phone number" required="">
              </div>

              <div class="col-md-6 ">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Country</option>
                  <option value="1">UK</option>
                  <option value="2">USA</option>
                  <option value="3">Pak</option>
                </select>
              </div>


              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Description"
                  required=""></textarea>
              </div>

              <div class="col-12 text-center pb_50">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

              </div>
              <div class="col-12 text-center ">
                <a href="#" class="btn-how-works bg_teal text-white ">Book a demo — It’s free <i
                    class="bi bi-chevron-right"></i></a>

              </div>
            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section>
  <!-- /Contact Section -->
</div>



<!-- ======= Footer ======= -->
<?php include 'footer.php'; ?>
<!-- End Footer -->