<!DOCTYPE html>
<html lang="en">

<head>
    @include('techstone.link')
</head>

<body class="page-service">

  <!-- ======= Header ======= -->
  @include('techstone.header')
  <!-- End Header -->

  <main id="main">
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Services</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Our Services</h2>
          </div>

          <div class="row gy-5">
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
              {{-- <div class="icon flex-shrink-0"><i class="bi bi-send" style="color: #15a04a;"></i></div> --}}
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Web Design</a></h4>
                <p class="description">If you are just starting out, we will take you through the process of registering a domain name for your business or organization,
                    setting up your personalized corporate emails, getting you a brand identity which involves logo design , letterheads and business cards. This ensures that by the time we have finished designing your website, you are ready to do business.</p>
              </div>
            </div><!-- End Service Item -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                {{-- <div class="icon flex-shrink-0"><i class="bi bi-book" style="color: #15bfbc;"></i></div> --}}
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">ERP (Enterprise Resource Planning)</a></h4>
                  <p class="description">We specialize in customizing and implementing ERP systems that seamlessly integrate finance, HR, and supply chain management, optimizing your business operations. Our tailored solutions are designed to enhance your efficiency and productivity</p>
                </div>
              </div>

            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
              {{-- <div class="icon flex-shrink-0"><i class="bi bi-cart" style="color: #d90769;"></i></div> --}}
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Bulk SMS</a></h4>
                <p class="description">We help start-ups, individuals and small businesses to grow their brand by using our cheapest Promotional Bulk SMS in Kenya.It's cheapest and reliable bulk sms marketing olution to reach prospective customers!
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
              {{-- <div class="icon flex-shrink-0"><i class="bi bi-shop-window" style="color: #f5cf13;"></i></div> --}}
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Suport and Maintenance</a></h4>
                <p class="description">We offer a dedicated technical support for our clients whenever there are issues on how their system operates</p>
              </div>
            </div><!-- End Service Item -->


            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                {{-- <div class="icon flex-shrink-0"><i class="bi bi-book" style="color: #15bfbc;"></i></div> --}}
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Search Engine Optimization</a></h4>
                  <p class="description">Maximize Your Return On Investment Short-Term And Long-Term With SEO. Get Traffic That Converts Into Sales With Search Engine Optimization. </p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                {{-- <div class="icon flex-shrink-0"><i class="bi bi-book" style="color: #15bfbc;"></i></div> --}}
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Digital Marketing</a></h4>
                  <p class="description">Our tailor-made campaigns and spot-on strategy help our clients launch brands,
                     disrupt industries and engage with the audiences that matter most.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                {{-- <div class="icon flex-shrink-0"><i class="bi bi-book" style="color: #15bfbc;"></i></div> --}}
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">ICT Consulting</a></h4>
                  <p class="description">Count on our expert guidance for technology strategies, cybersecurity solutions, infrastructure optimization, and digital transformation strategies. We tailor our IT consulting services to meet your specific business needs</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="icon flex-shrink-0"><i class="bi bi-buildings" style="color: #f57813;"></i></div> --}}
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Custom Development</a></h4>
                  <p class="description">We create websites that are professional, affordable and easy to use. We understand that you have a business to run and we don't want to waste your time or money.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="icon flex-shrink-0"><i class="bi bi-buildings" style="color: #f57813;"></i></div> --}}
                <div>
                  <h4 class="title"><a href="#" class="stretched-link">Data Analytics</a></h4>
                  <p class="description">Our data analytics services offer comprehensive solutions for data collection, analysis, and visualization. We empower our clients with data-driven insights to make informed decisions that drive success.</p>
                </div>
              </div>
           <!-- End Service Item -->

          </div>

        </div>
      </section>
   <!-- End Our Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('techstone.footer')
 <!-- End Footer -->
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
