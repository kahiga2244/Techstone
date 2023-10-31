<!DOCTYPE html>
<html lang="en">
<head>
  @include('techstone.link')
  <link href="assets/css/request.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">

</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  @include('techstone.header')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/team-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Request</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Quote</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Request Quote</h2>
        </div>


      <!-----------------------------request quote---->
      {{-- <div class="container1">
        <form id="contact" action="" method="post">
          <h3 class="text-center">Request a Quote, Now </h3>
          <h4 class="text-center">Get a quote for your business</h4>
          <fieldset>
            <label class="form-label">Name</label>
            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <label class="form-label">Email</label>
            <input placeholder="Your Email Address" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <label class="form-label">Phone Number</label>
            <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
          </fieldset>
          <fieldset>
            <label class="form-label">Business/Organization</label>
            <input placeholder="Your Business/Organization" type="text" tabindex="2" required>
          </fieldset>
          <fieldset>
            <label class="form-label">Product/Service</label>
            <select name="" id="" class="form-select">
                <option value="">select</option>
               <option value="">Custom Management System</option>
               <option value="">Custom Website Development</option>
               <option value="">Digital Marketing</option>
               <option value="">Search Engine Optimization</option>
               <option value="">Bulk SMS</option>
             </select>
          </fieldset>
          <fieldset>
            <label class="form-label">Requirement Details</label>
            <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>


      </div> --}}
      <div class="container">
        <form action="{{ route('request')}}" method="POST">
            @csrf
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="field" tabindex="1">
                <label for="username">
                    Your Name
                </label>
                <input name="username" type="text" placeholder="e.g. john doe" required>
            </div>
            <div class="field" tabindex="2">
                <label for="email">
                    Your Email
                </label>
                <input name="email" type="text" placeholder="email@domain.com" required>
            </div>
            <div class="field" tabindex="3">
                <label for="phone_number">
                   Your Phone Number
                </label>
                <input name="phone_number" type="number" placeholder="phone number" required>
            </div>
            <div class="field" tabindex="3">
                <label for="business">
                    Business/Organization
                </label>
                <input name="business" type="text" placeholder="business" required>
            </div>
            <div class="field" tabindex="4">
                <label for="business">
                   Product/Service
                </label>
                <select name="service" id="service" class="form-select" required>
                    <option value="" disabled selected>select</option>
                   <option value="Custom Management System">Custom Management System</option>
                   <option value="Custom Website Development">Custom Website Development</option>
                   <option value="Digital Marketing">Digital Marketing</option>
                   <option value="Search Engine Optimization">Search Engine Optimization</option>
                   <option value="Bulk SMS">Bulk SMS</option>
                   <option value="Other">Other</option>
                 </select>
            </div>

            <div class="field" tabindex="5">
                <label for="message">
                   Your Message
                </label>
                <textarea name="message" placeholder="type here" required></textarea>
            </div>

            <button type="submit">Send Me Message</button>
            <div class="social-media">
                <span>
                    Get In Touch<i class="fas fa-long-arrow-alt-right"></i>
                </span>
                <a class="fab fa-facebook-f" href="" target="blank_"></a>
                <a class="fab fa-twitter" href="" target="blank_"></a>
                <a class="fab fa-instagram" href="" target="blank_"></a>
                <a class="fab fa-codepen" href="" target="blank_"></a>
            </div>
        </form>
    </div>
      <!---------------------------end quote---->


        </div>

    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
