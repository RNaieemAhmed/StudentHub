
<?php
	include("connection.php");
	error_reporting(0);
	session_start(); 

 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Hub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon-removebg.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: StudentHub - v4.7.0
  * Template URL: https://Baig,Naieem and Affan.com/StudentHub-free-bootstrap-template-creative/
  * Author: Baig,Naieem and Affan.com
  * License: https://Baig,Naieem and Affan.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span> Student Hub</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1 style="color: Black;">Welcome to Student Hub</h1>
      <h2>Free up your time by getting professional help - without compromising on quality!</h2>
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <center><img src="assets/img/logo.png" width="50%"></center>
              <h3>Getting homework help is easy!</h3>
              <p>
                Getting homework help is easy!
We have an elite group of highly qualified tutors! Other online tutoring services employ large numbers of college students with the hope that someone may be able to help. We are very selective and choose only the best qualified tutors for each academic subject.One-on-one online sessions and step-by-step written solutions are the foundation of our services.
                
              </p>
              
            </div>
          </div>
          <div id="content" class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <center><i class="bx bx-receipt"></i>
                  <h4>Homework</h4></center>
                  <p>Receive assistance with homework assignments, practice questions, laboratory write-ups, and more. Get 24/7 access to college homework help.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <center><i class="bx bx-hourglass"></i>
                  <h4>Assignment</h4></center>
                  <p>The popular subjects for us include engineering, science, maths, programming, law, management, marketing, accounting amongst several others.</p>
                </div>
                <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">

                </div>
                
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <center><i class="bx bxl-product-hunt"></i>
                  <h4>Projects</h4></center>
                  <p>Our Online Projects Help Service is focused on:- on time delivery, fresh and high-quality, creativity, originality, and plagiarism free.</p>
                </div>
                
                <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">

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

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
          <p>StudentHub brings students who need help on assignments and brilliant tutors from around the world together, seamlessly. Our digital solution has helped thousands of students through step-by-step explanations to millions of problems over the past decade.</p>
        </div>

        <div class="row">
          <div class="col-md-1 col-lg-1 d-flex align-items-stretch mb-5 mb-lg-0"></div>
          <div class="col-md-5 col-lg-5 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="Homework_form.html">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><center><i class="bx bx-receipt"></center></i></div>
              <h4 class="title links"><center>Homework</center></h4>
              <p class="description">Receive assistance with homework assignments, practice questions, laboratory write-ups, and more. Get 24/7 access to college homework help.</p>
            </a>
            </div>
          </div>
          <div class="col-md-1 col-lg-1 d-flex align-items-stretch mb-5 mb-lg-0"></div>
          <div class="col-md-5 col-lg-5 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="Assignment_form.html">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><center><i class="bx bx-hourglass"></center></i></div>
              <h4 class="title links"><center>Assignment</center></h4>
              <p class="description">The popular subjects for us include engineering, science, maths, programming, nursing, law, management, finance, marketing, accounting amongst several others.</p>
            </a>
            </div>
          </div>
          <center>
          <div class="col-md-5 col-lg-5 d-flex align-items-stretch mb-5 mb-lg-0 " style="margin-top:40px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <a href="Project_form.html">
              <div class="icon"><center><i class="bx bxl-product-hunt"></center></i></div>
              <h4 class="title links"><center>Projects</center></h4>
              <p class="description">Our Online Projects Help Service is focused on:- on time delivery, fresh and high-quality, creativity, originality, and plagiarism free.</p>
            </a>
            </div>
          
          </div>
        </center>

        </div>

      </div>
    </section><!-- End Services Section -->


    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>WHAT OUR STUDENTS SAY</h2>
          <p>Trusted and Recommended by Thousands of Students | Satisfaction guaranteed.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The expert really exceeded my expectations in my management assignment! The responses were EXACTLY what I envisioned an expert to respond - especially in "the third person". Excellent material provided and followed instructions 100%. Very very very pleased!!!<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpeg" id="azfar" class="testimonial-img" alt="">
                <h3>Azfar Faheem</h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I was really struggling with the effect of current and magnetism assignments in undergraduate class when I came across HelpwithAssignment and they really have brilliant Physics electricity Online Experts,have worked on my Physics electricity solution and helped me get good grades.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                <h3>Zunaidh Basha</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The preciseand brief annotated bibliography submitted by the writing expert at HwA for myWorld Religion thesis paper was just what my professor had asked for. There wasno problem in communication between writing expert and me and researchwork done was absolutely spot on<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpeg" class="testimonial-img" alt="">
                <h3>Aasheer Shaik</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  When I made a decision to use My assignment help for assignment writing service, I was scared of being fooled. But that was an ultimate surprise for me to get a flawless paper with perfect citation and referencing on time. That was all I wanted! Completly satisfied.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                  
                  <img src="assets/img/testimonials/testimonials-4.jpeg" class="testimonial-img" alt="">
                <h3>Mohammed Sufiyan</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Greatassistance!!! Thank you guys for all your support. I love the way you dealtwith my every instruction and I'm very much satisfied with the work. it's Really Helpful, As I haddifficulties managing time for studies and job, you really saved both.<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpeg" class="testimonial-img" alt="">
                <h3>Suhail Shariff</h3>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Team</h2>
          <p>Having mutual respect, common and aligned goals, open communication, and patience can all help make for a successful team. Teamwork only works when team members feel like they can speak openly, share ideas without getting shot down (and build on those of others), make suggestions, and voice their opinions. Our team shares our thoughts and ideas. Thus makes us a good team to solve the problem we chose.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-1.jpg"class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>R Naieem Ahmed</h4>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/team-2.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4> Mohammed Adnan Baig </h4>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ismail Affan</h4>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Get assignment help from subject matter experts! 4.7/5 rating | 10,000+ happy students | Great service quick and easy form Review Offers Accept An Offer Done...</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 GST Road, Vandalur, Chennai 600 048. Tamilnadu. INDIA</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>Studenthub.educator@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 95895 55488</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 info-box">
            <img class="mb-4 mb-lg-0" src="assets/img/logo.png">
          </div>

          <div class="col-lg-6">
           
            <form action="" method="post" role="form" class="">
              <div class="row"><center><h1>Contact Us</h1></center>
                <center><div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div></center>
              <div class="col-md-6 form-group">
                <textarea type="message" class="form-control" name="message" rows="5"  placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="error-message"></div>
              </div>
              <div ><button class="text-center" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 footer-links">
              
          </div>

          <div class="col-lg-8 col-md-8">
            <div class="row">
            <div class="footer-info col-lg-7 col-md-7">
              <h3>StudentHub</h3>
              <p class="pb-3"><em>Yup! We've got an expert waiting to help you in every subject!.</em></p>
              <p>
                A108 GST Road, Vandalur, Chennai .<br>
                TN 600 048, INDIA<br><br>
                <strong>Phone:</strong> +91 95589 55488<br>
                <strong>Email:</strong> Studenthub.educator@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
            <div class="footer-info col-lg-5 col-md-5">
              <center><img src="./assets/img/logo.png" width="300px"></center>
            </div>
          </div>
          </div>

          <div class="col-lg-2 col-md-2 footer-links">
              
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
           

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>StudentHub</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://Baig,Naieem and Affan.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://Baig,Naieem and Affan.com/StudentHub-free-bootstrap-template-creative/ -->
        Designed by <a href="https://Baig,Naieem and Affan.com/">Baig,Naieem and Affan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  
  <script src="assets/js/main.js"></script>

  <script type="module">

		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');
		
		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});
		
		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});


		
		var username = document.getElementById("account_id");
		var password = document.getElementById("account_password");
		var confirm_password = document.getElementById("confirm_password");

		var signButton = document.getElementById("valid_account");

    signButton.onclick = (e) => {
      e.preventDefault();
      confirm_account()
      console.log('izjkjfsnfd')
    }



    function confirm_account() {
     
    }
			
			function validatePassword(){		
				
				if(password.value != confirm_password.value)
				{
				confirm_password.setCustomValidity("Passwords Don't Match");
				}
				else {


                  }			
                }
	</script>

</body>

</html>
<?php

$bn=$_GET['name'];
$bi=$_GET['email'];
$bm=$_GET['message'];

$query="INSERT INTO suggesstion VALUES('$bn','$bi','$bm')";
$data=mysqli_query($conn,$query);

if($data){
	echo "";
}
else{
	echo "";
}
?>