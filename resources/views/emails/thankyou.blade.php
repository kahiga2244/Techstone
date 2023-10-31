<!DOCTYPE html>
<html lang="en">
    <style>
        .thankyou-wrapper{
          width:100%;
          height:auto;
          margin:auto;
          background:#ffffff;
          padding:10px 0px 50px;
        }
        .thankyou-wrapper h1{
          font:100px Arial, Helvetica, sans-serif;
          text-align:center;
          color:#333333;
          padding:0px 10px 10px;
        }
        .thankyou-wrapper p{
          font:26px Arial, Helvetica, sans-serif;
          text-align:center;
          color:#333333;
          padding:5px 10px 10px;
        }
        .thankyou-wrapper a{
          font:26px Arial, Helvetica, sans-serif;
          text-align:center;
          color:#ffffff;
          display:block;
          text-decoration:none;
          width:250px;
          background:rgba(27, 47, 69, 0.9);
          margin:10px auto 0px;
          padding:15px 20px 15px;
          border-bottom:5px solid rgba(27, 47, 69, 0.9);
        }
        .thankyou-wrapper a:hover{
          font:26px Arial, Helvetica, sans-serif;
          text-align:center;
          color:#ffffff;
          display:block;
          text-decoration:none;
          width:250px;
          background:rgba(27, 47, 69, 0.9);
          margin:10px auto 0px;
          padding:15px 20px 15px;
          border-bottom:5px solid rgba(27, 47, 69, 0.9);
        }
        </style>
<head>
    @include('techstone.link')
  </head>
    <!-- End Header -->
<body class="page-contact">
  <!-- ======= Header ======= -->
  @include('techstone.header')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center">
        {{-- style="background-image: url('assets/img/contact-header.jpg'); --}}
      <div class="container position-relative d-flex flex-column align-items-center">

        {{-- <h2>Thank You</h2>
        <ol>
          <li><a href="index.html">Thank</a></li>
          <li>You</li>
        </ol> --}}

      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Thank You Section ======= -->
    <section class="login-main-wrapper">
        <div class="main-container">
            <div class="login-process">
                <div class="login-main-container">
                    <div class="thankyou-wrapper">
                        <h1><img src="http://montco.happeningmag.com/wp-content/uploads/2014/11/thankyou.png" alt="thanks" /></h1>
                          <p>for contacting us, we will get in touch with you soon... </p>
                          <a href="{{ url('/') }}">Back to home</a>
                          <div class="clr"></div>
                      </div>
                      <div class="clr"></div>
                  </div>
              </div>
              <div class="clr"></div>
          </div>
      </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<!-- End Footer -->
@include('techstone.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
