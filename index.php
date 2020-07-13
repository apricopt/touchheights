<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TouchHeights</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .vert .carousel-item-next.carousel-item-left,
.vert .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.vert .carousel-item-next,
.vert .active.carousel-item-right {
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100% 0);
}

.vert .carousel-item-prev,
.vert .active.carousel-item-left {
-webkit-transform: translate3d(0,-100%, 0);
        transform: translate3d(0,-100%, 0);
}

.contact-form{
    background: #ffffff82;
    /* margin-top: 10%; */
    /* margin-bottom: 5%; */
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

  </style>

</head>

<body>

<?php
			  if(isset($_GET['success'])) {
				  echo
			" <div style='margin:0px' class='alert alert-success alert-dismissible fade show mt-1' role='alert'>
  			<strong>Success!</strong> Your message has been sent .You will be contacted soon!
  				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    			<span aria-hidden='true'>&times;</span>
  				</button>
			</div>";

			  }
			?>



  <div class="wrap">

    <!-- ======= Hero Section ======= -->
    <!-- <section id="hero">
      <div class="hero-container" data-aos="fade-up">
        <h1>Start your new digital experience with <span>Touch Heights</span></h1>
        <h2>We are team of talanted designers making websites with Bootstrap</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div> -->

        <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>Touch Heights</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php"><img src="assets/img/mainlogo.png" alt="" class="img-fluid" ></a> -->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li ><a href="#header">Home</a></li>
            <li><a href="#about">About</a>
              
            </li>

            <li  class="drop-down "><a href="#services">Services</a>
              <ul>
              <li class="drop-down"><a href="itservices.php">IT Services</a>
                    <ul>
                      <li><a href="itservices.php#mobile">Application Development</a></li>
                      <li><a href="itservices.php#web">Web Development</a></li>
                      <li><a href="itservices.php#game">Games Development</a></li>
                      <li><a href="itservices.php#comp">Computer Repairing</a></li>
                     
                
                    </ul>
               </li>
                <li><a href="nonmedical.php">Non Medical Transport</a></li>
                  <li ><a href="telecare.php">Tele Healthcare Equipment</a>
                <li><a href="solar.php">Solar Consultant</a></li>
                <li ><a href="travel.php">Travel Tourism</a>
                 
                    <li ><a href="homeimp.php">Home Improvement</a>
                 
                </li>
              </ul>
            
            </li>
            
            <li><a href="#contact">Contact</a></li>

          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

      <!-- ======= Hero Section ======= -->
  <section id="hero" style="position: relative;">
    <img src="assets/img/mainlogosuper.png" alt="" class="img-fluid" id="mainlogo">
    <div id="particles-js"></div>

    
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide vert" data-ride="carousel">
        
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        
        <div class="carousel-inner" role="listbox" style="position: relative;">
          
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide1.jpeg'); background-position:80% 0%">
            <div class="carousel-container">
              <div class="carousel-content container" data-aos="fade-up">
                <h2 class="animated fadeInDown">Delivering beyond expectations</h2>
                <p class="animated fadeInUp  pwala">Providing Quality  services including software development, mobile applications, Tele Healthcare Equipment , web development, non-medical transportation, Solar Quotation, tourism and Home improvements services.Our satisfied customers can testify to our excellent services and uniquely designed products.</p>
                <!-- <a href="#about" class="btn-get-started animated fadeInUp scrollto" style="position:relative;">Read More</a> -->
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container" >
                <h2 class="animated fadeInDown ">IT consultancy</h2>
                <p class="animated fadeInUp  pwala">We are a professional, enthusiasftic, innovative and dedicated team to provide professional IT consulting services.Providing bleeding edge services in mobile applications , website development and games. </p>
                <!-- <a href="itservices.php" class="btn-get-started animated fadeInUp scrollto">Read more</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown ">Non-Medical Transport</h2>
                <p class="animated fadeInUp  pwala">Touch Heights Consultant  provides safer and smarter transportation for healthcare and dramatically improves the way patients access their medical appointments, among other things. We provide services from home to doctor office.</p>
                <!-- <a href="nonmedical.php" class="btn-get-started animated fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>
          
           <!-- Slide 4 -->
           <div class="carousel-item" style="background-image: url('assets/img/slide4.jpg'); background-position: bottom;">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown ">Free Solar Quotation </h2>
                <p class="animated fadeInUp  pwala">Touch Heights is leading solar sales consultants partner with top solar installation companies.The benefits of going solar are undeniable our customers save money while being part of green energy to save the environment for upcomming generations.</p>
                <!-- <a href="solar.php" class="btn-get-started animated fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          
           <!-- Slide 5 -->
           <div class="carousel-item" style="background-image: url('assets/img/slide5.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown ">Travel Tourism Europe to Pak</h2>
                <p class="animated fadeInUp  pwala">Touch Heights   provides creative communication services to help companies, organizations and destinations working in responsible and sustainable tourism succeed.</p>
                <!-- <a href="travel.php" class="btn-get-started animated fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>
          
          
           <!-- Slide 6 -->
           <div class="carousel-item" style="background-image: url('assets/img/homeimp.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown ">Home Improvement</h2>
                <p class="animated fadeInUp  pwala">Lets Fix your dream Home with Touch heights, Make your   Homes better With professionalism Home imprvement services.We are Excellence in Every Step. We provide best quality and best price in Window blinds installation flowing carpet vinyle wood and tiles and painting and home decor</p>
                <!-- <a href="homeimp.php" class="btn-get-started animated fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>
          

          
        </div>

        <a style=" z-index: 10;" class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a style=" z-index: 10;" class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
    </div>
  </section><!-- End Hero -->

  
  
   

  

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="row">
            <div  style="background-image: url(assets/img/slide1.jpg); background-position: bottom;" data-aos="fade-right" class="picstyle image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
            <div class="col-xl-7 pt-4 pt-lg-0 d-flex align-items-stretch">
              <div class="content d-flex flex-column justify-content-center" data-aos="fade-left">
                <h3 class="pt-3"> About us </h3>
                <p class="pt-4">
                  Touch heights have a full domestic  team with extravagant experience while providing Quality  services including software development, mobile applications, Tele Healthcare Equipment , web development, non-medical transportation, Solar Quotation, tourism and Home improvements services.Touch Heights Consultant believes in the quality of hours rather than the number of hours
We offer realistic and actionable recommendations to help you make the best decisions for the successful growth and international expansion of your business.
 
                </p>
                <div class="row pony p-3 mt-2">
                  <div class="col-md-6 icon-box " data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Our Mission</h4>
                    <p>We are committed to growing our business by embracing technology, developing strong partnerships and focusing on customer satisfaction. Our mission is to make sure that we provide the right resources at the right time to maximize the work potential of our clients.</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Our Vision</h4>
                    <p>Touch Heights Consultant always focused on customer satisfaction. We satisfy our customers by preliminary study, analysis of customer needs, available resources and future vision. It collects all the information from the organization. It is efficient and easy to implement programs</p>
                  </div>
                 
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

    
 
   

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Services</span>
            <h2>Services</h2>
            <p>To be a unique service provider, we aim to have the most flexible team on board equipped with the best customizable tools and always work hard to maintain a lasting relationship with all our partners.</p>
          </div>

          <div class="row">
            <div class="col-md-4">
              <a href="itservices.php" style="color: rgb(57, 56, 59);">
              <div class="icon-box johny " data-aos="fade-up" data-aos-delay="300">
                <i class="icofont-computer" style="color: #e40373;"></i>
                <h4>IT Services</h4>
                <p>We are a professional, enthusiastic, innovative and dedicated team to provide professional IT consulting services.We provide the long lasting support for our clients</p>
              </div>
            </a>
            </div>
            <div class="col-md-4">
              <a href="nonmedical.php" style="color: rgb(57, 56, 59);">
              <div class="icon-box johny  " data-aos="fade-up" data-aos-delay="100">
                <i class="icofont-ambulance" style="color: #0ea5e0;"></i>
                <h4>Non Medical Transport</h4>
                <p>Touch Heights Consultant  provides safer and smarter transportation for healthcare and dramatically improves the way patients access their medical appointments, among other things.</p>
              </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="telecare.php" style="color: rgb(57, 56, 59);">
              <div class="icon-box johny" data-aos="fade-up" data-aos-delay="400">
                <i class="icofont-capsule" style="color: #f0b103;"></i>
                <h4>Tele Healthcare Equipment</h4>
                <p>Touch Heights expanded its Tele Healthcare Equipment capabilities in order to protect patients and staff members from the new coronavirus.</p>
              </div>
            </a>
              
            </div>
            <div class="col-md-4">
              <a href="solar.php" style="color: rgb(57, 56, 59);">
              <div class="icon-box johny" data-aos="fade-up" data-aos-delay="200">
                <i class="icofont-sun-alt" style="color: #07cc70;"></i>
                <h4>Solar Installation in california</h4>
                <p>Touch Heights Offers Solar panels that give you great return on investment. Save electricity and install solar panel and Switch to solar without penny out of pocket</p>
              </div>
            </a>
            </div>
            
            <div class="col-md-4">
              <a href="travel.php" style="color: rgb(57, 56, 59);">
              <div class="icon-box johny" data-aos="fade-up" data-aos-delay="400">
                <i class="icofont-airplane" style="color: #a400b9;"></i>
                <h4>Travel Tourism</h4>
                <p>Touch Heights provides creative communication services to help companies, organizations and destinations working in responsible and sustainable tourism succeed.</p>
              </div>
            </a>
              
            </div>
           
            <div class="col-md-4">
              <a href="homeimp.php" style="color: rgb(57, 56, 59);">
              <div class="icon-box johny" data-aos="fade-up" data-aos-delay="400">
                <i class="icofont-ui-home" style="color: #5c9b15;"></i>
                <h4>Home Improvements</h4>
                <p>Touch Heights provides creative communication services to help companies, organizations and destinations working in responsible and sustainable tourism succeed.</p>
              </div>
            </a>
              
            </div>
            
          </div>

        </div>
      </section><!-- End Services Section -->

  
   <!-- ======= Cta Section ======= -->
   <section id="cta" class="cta">
    <div class="container">

      <div class="text-center" data-aos="zoom-in">
        <h3>COVID19</h3>
        <p>We are even providing our best sevices in such difficult time where World is suffering from such pandemic.
          <br>

          #Stay Home 
          <br>
          #Stay Safe
        </p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>

    </div>
  </section><!-- End Cta Section -->
     





      















      <!-- ======= Testimonials Section ======= -->
      <!-- <section id="testimonials" class="testimonials">
        <div class="container">

          <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dummy text    Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text   Dummy text
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

          </div>

        </div> 
      </section>-->
      <!-- End Testimonials Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients" style="margin-top:40px">
        <div class="section-title" data-aos="fade-down">
            <span>Our Partners</span>
            <h2>Our Partners</h2>
          </div>

        <div class="container">

          <div class="row">

            <div class=" col-lg-2 col-md-4 col-6">
              <img src="assets/img/client1.jpeg" class="img-fluid" alt="" data-aos="zoom-in">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
              <img src="assets/img/client2.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>

            <div class="col-lg-2  col-md-4 col-6 pt-3">
              <img src="assets/img/client4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
            
            <div class="col-lg-2  col-md-4 col-6 pt-3">
              <img src="assets/img/apricopt.jpeg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
            <div class="col-lg-2 col-md-4 col-6 pt-3">
              <img src="assets/img/client5.jpeg"   class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 pt-3">
              <img src="assets/img/client6.jpeg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>

           

         
          </div>

        </div>
      </section>
      <!-- End Clients Section -->


      <!-- ======= Team Section ======= -->
     <!-- team section started -->

     <div class="container pt-5 my-5 z-depth-1">
  <section class="p-md-3 mx-md-5 text-center text-lg-left">
  <div class="section-title" data-aos="fade-down">
            <span>Our Team</span>
            <h2>Our Team</h2>
          </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="./assets/img/avatarmale.png"
              class="img-fluid rounded-circle z-depth-1"
              style="width:150px;height:150px"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Aamir President</h6>
            <p class="text-muted">
              
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
            src="./assets/img/avatarmale.png"
            style="width:150px;height:150px"
            
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Asim</h6>
            <p class="text-muted">
              <small
                ><i
                  >Senior Software Developer</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
            src="./assets/img/avatarfemale.png"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Ayesha Khan </h6>
            <p class="text-muted">
              <small
                ><i
                  >Director sales & marketing Asia</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
            src="./assets/img/avatarfemale.png"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Dalilla</h6>
            <p class="text-muted">
              <small
                ><i
                  >Marketing Manager</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


      <!-- team section ended -->
      
      
      <!-- End Team Section -->

      <!-- ======= Pricing Section ======= -->
      <!-- <section id="pricing" class="pricing">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Solar Installation</span>
            <h2>Solar Installation</h2>
            <p>We come up with high quality, hassle free solar installations at the lowest cost and with the highest reliability. </p>
          </div>

          <div class="row">
         
            <div class="col-12 col-md-8  pt-5">
              
              <h3 class="pt-5">
                We aim to improve energy solutions by increasing quality and reducing energy costs.
              </h3>
              <p>
                Touch Heights Consultant is providing solar consultation for you to choose best solar options and see the drastic reduction in your monthly electricity bills. You can get independent solar electric power that can mostly balance or completely eliminate your electric bill. Our vision is to provide eco-friendly environment to every home and the access to clean energy by eliminating all barriers. 
            </p>
          </div>
          <div class="col-12 col-md-4 " >
            <img src="assets/img/solar1.jpg" class="img-fluid" style="height:500px; object-fit:cover">
          </div>

          </div>

        </div>
      </section> -->
      <!-- End Pricing Section -->


      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>Contact Us</span>
            <h2>Contact Us</h2>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box z_green">
                <i class="bx bx-map"></i>
                <h3 class="z_green">Our Address</h3>
                <p class="text-muted">  <strong class="z_green">Main office:</strong> 688 Costz Azul
                  Imperial county CA</p>
                  <p class="text-muted">  <strong class="z_green">Texas office:</strong> 2005 Keystone dr
Plano TX 7507</p>
                  
                  
                  <p class="text-muted"><strong class="z_green">Branch office:</strong> 49/2 Zulfiqar st 5
                    Zone A DHA phase 8 Karachi , Pk</p>
                    
                    <p class="text-muted"><strong class="z_green">Branch office:</strong> C8 Block PHA Heights G11/3 Isl , Pk</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box">
                <i class="bx bx-envelope z_green"></i>
                <h3  class="z_green">Email Us</h3>
                <p>info@touchheightsconsult.com<br>contact@touchheightsconsult.com</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="info-box z_green">
                <i class="bx bx-phone-call"></i>
                <h3  class="z_green">Call Us</h3>
                <p class="text-muted">7604120990</p>
                <p class="text-muted">9729228893</p>
              </div>
            </div>
          </div>





          <!-- form here -->
          <div class="container-fluid" style="background-image:
linear-gradient(to bottom, rgba(245, 246, 252, 0.52), #25958063),
url('images/seasoanl-5.jpg'); background-attachment:fixed; background-size:cover; padding:40px 0px; margin-top:40px">


<div class="container contact-form" style="">

            <div class="contact-image">
                <img src="assets/img/rocket1.png" alt="rocket_contact"/>
            </div>
            <form method="POST" action="include/form_handler.php">
                <h3 style="color:#259580">Reach us directly from here!</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" value="" />
                        </div>
						
                       
                    </div>
                    <div class="col-md-6">
					
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message" style="width: 100%; height: 150px;"></textarea>
                        </div>
						 <div class="form-group">
                            <button type="submit" name="contact" class="btnContact" value="Send Message" >Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
</div>




</div> 

          <!-- form ends -->

        </div>
      </section><!-- End Contact Us Section -->

     

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">

      

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>TouchHeights</h3>
              <p>
                <strong>Main office:</strong> 688 Costz Azul Imperial county CA
                <br>
                <br>
                <strong>Texas office:</strong> 2005 Keystone dr Plano TX 7507
                <br>
                <br>
                <strong>Branch office:</strong> 49/2 Zulfiqar st 5 Zone A DHA phase 8 karachi ,Pk
                <br>
                <br>
                <strong>Branch office:</strong> C8 Block PHA Heights G11/3 Isl , Pk
                
                <hr>
                

                <strong>Phone:</strong>  7604120990<br>
                <strong>Phone:</strong>  9729228893<br>
                 <hr>
                <strong>Email:</strong>info@touchheightsconsult.com
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Contact</a></li>
              
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="nonmedical.php">Non Medical Transport</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="travel.php">Tourism</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="telecare.php">Tele Healthcare Equipment</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="solar.php">Solarinstallations</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="itservices.php">IT Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="homeimp.php">Home Improvement</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>JoinUs on social networks</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>TouchHeights</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
         
       
        </div>
      </div>
    </footer><!-- End Footer -->

  </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

<script>
  $('.carousel').carousel({
  interval: 1000 * 10
});

</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   <!-- particles scripts here -->
  <script src="assets/js/particles.min.js"></script>
  <script src="assets/js/app.js"></script>

</body>

</html>
