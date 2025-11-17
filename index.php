<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="google-site-verification" content="RqJFccNSRTzB5-ymAVsQTzbVwO-bV1ZUMO5JbrjYT4Y" />
  <!-- ///// Stylesheet ///// -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <!-- ///// Fontawesome CDN ///// -->
  <script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="anonymous"></script>
  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>interiorX: A Sustainable Solution</title>
</head>

<body>
  <div class="loader">
    <div class="spinner">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!-- Navigation Section starts here -->
  <nav class="visible">
    <div class="container nav__container">
      <!-- website logo -->
      <h4 class="logo">interiorX:A sustainable solution</h4>
      <!-- PHP Logged-in session -->


      <!-- Hide button -->
    
      <!--  -->
      <!-- Navigation -->
      <div class="nav__navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#AboutUs">About Us</a></li>
          <li><a href="#Services">Services</a></li>
          <li><a href="login.php" >Booking</a></li>
          <li><a style="color: rgb(250, 69, 9); " href="login.php">Login/Register</a></li>
       
        </ul>
      </div>

      <!-- Menu Toggle Button -->
      <div class="menuBtn">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

  <!-- Header Section Starts Here -->
  <header>
    <div class="container container--header">
      <div class="header__info">
        <h1>interior Designer</h1>
        <p>At, <b>interiorX</b>, we are dedicated to transforming the way spaces come to life in today's dynamic landscape.</p>
      </div>
    </div>
  </header>

  <!-- About Us  -->
  <section id="AboutUs" class="chous">
    <div class="row">

      <div class="images" data-aos="fade-up" data-aos-delay="200">
        <img src="./assets/images/web_bg.jpg" alt="Interior Designer Image" />
        <span data-aos="fade-right">
          8+ <br />
          Years <br />
          Experience <br />
        </span>
      </div>
      <div class="box" data-aos="fade-up">
        <div class="heading">
          <div class="content" data-aos="fade-up">
            <h5>ABOUT US</h5>
            <h1>Elevating Your Spaces with Innovative Interior Designs</h1>
          </div>
        </div>
        <p data-aos="fade-up">
          At, <b>interiorX</b>, we are dedicated to transforming the way spaces come to life in today's dynamic landscape. With a commitment to excellence and innovation, we strive to provide cutting-edge interior design solutions that bring our clients' dreams to reality.
        </p>
        <p data-aos="fade-up">
          Our journey in the world of interior design began over three decades ago, and since then, we have been pioneers in creating spaces that seamlessly blend functionality with aesthetics. We specialize in delivering interior designs that reflect our passion for delivering unparalleled results, enhancing the beauty of every environment.
        </p>
        <p data-aos="fade-up">
          As a trusted name in the interior design industry, <b>interiorX</b> takes pride in offering a comprehensive range of services. From conceptualizing and designing to project management, our team of expert designers is committed to turning your visions into captivating interior spaces with precision and creativity.Most people have heard the term "wco-friendly" interior design. But not everyone understands exactly what it means. Society is becoming aware of the environmentally responsible interior design.
        </p>
      </div>

    </div>
  </section>


  <!-- /About Us  -->

  <!-- Project Section -->
  <section id="Projects">
    <div class="cotainer">
      <div class="heading">
        <div class="content" data-aos="fade-up">
          <h5>PROJECTS</h5>
          <h1>Web have Designed valueable projects</h1>
        </div>
      </div>
      <br>
      <div class="image-gallery">
        <div class="image residential">
          <img src="./assets/images/interior-1.jpg" alt="Residential" />
        </div>
        <div class="image residential">
          <img src="./assets/images/interior-2.jpg" alt="Residential" />
        </div>
        <div class="image residential">
          <img src="./assets/images/interior-3.jpg" alt="Residential" />
        </div>
        <div class="image commercial">
          <img src="./assets/images/interior-4.jpg" alt="Commercial" />
        </div>
        <div class="image commercial">
          <img src="./assets/images/interior-5.jpg" alt="Commercial" />
        </div>
        <div class="image commercial">
          <img src="./assets/images/interior-6.jpg" alt="Commercial" />
        </div>
        <div class="image hospital">
          <img src="./assets/images/interior-7.jpg" alt="Hospital" />
        </div>
        <div class="image hospital">
          <img src="./assets/images/interior-8.jpg" alt="Hospital" />
        </div>
        <div class="image hospital">
          <img src="./assets/images/interior-9.jpg" alt="Hospital" />
        </div>
        <div class="image school">
          <img src="./assets/images/interior-10.jpg" alt="School" />
        </div>
        <div class="image school">
          <img src="./assets/images/interior-11.jpg" alt="School" />
        </div>
        <div class="image school">
          <img src="./assets/images/interior-12.jpg" alt="School" />
        </div>
      </div>
    </div>
  </section>

  <!-- /Project Section -->

  <!-- services  -->
  <section class="services" id="Services">
    <div class="heading">
      <div class="content">
        <h5 data-aos="fade-up">COLOR SCHEMES</h5>
        <h1 data-aos="fade-up" data-aos-delay="150">
          We use Eco-friendly paints for walls
        </h1>
      </div>
    </div>
    <br /><br />
    <div class="brand-container">
      <div class="brand-box">
        <img src="./assets/images/asianpaints.png" alt="paints" />
      </div>
      <div class="brand-box">
        <img src="./assets/images/bergerpaints.png" alt="paints" />
      </div>
      <div class="brand-box">
        <img src="./assets/images/indigopaints.png" alt="paints" />
      </div>
      <div class="brand-box">
        <img src="./assets/images/kensainerolac.png" alt="paints" />
      </div>
      
    </div>
  </section>
  <!-- /services  -->

  <!-- services  -->
  <section class="services" id="OurOffices">
    <div class="heading">
      <div class="content">
        <h5 data-aos="fade-up">FURNITURE</h5>
        <h1 data-aos="fade-up" data-aos-delay="150">
          Nontoxic and reuse material is our pride
        </h1>
      </div>
    </div>
    <br /><br />
    <div class="brand-container">
      <div class="brand-box">
        <img src="./assets/images/rosewood.jpg" alt="wood images">
        <h3><i class="fa fa-align-center"></i>Rose Wood</h3>
      </div>
      <div class="brand-box">
        <img src="./assets/images/pinewood.jpg" alt="wood images" />
        <h3><i class="fa fa-align-center"></i>Pin Wood</h3>
      </div>
      <div class="brand-box">
        <img src="./assets/images/jackwood.jpg" alt="wood images" />
        <h3><i class="fa fa-align-center"></i>Jack Wood</h3>
      </div>
      <div class="brand-box">
        <img src="./assets/images/bamboo.jpg" alt="wood images" />
        <h3><i class="fa fa-align-center"></i>Bamboo wood</h3>
      </div>
      <div class="brand-box">
        <img src="./assets/images/oakwood.jpg" alt="wood images" />
        <h3><i class="fa fa-align-center"></i>Oak Wood</h3>
      </div>
      <div class="brand-box">
        <img src="./assets/images/sheeshamwood.jpg" alt="wood images" />
        <h3><i class="fa fa-align-center"></i>Sheesom Wood</h3>
      </div>
    </div>
  </section>
  <!-- /services  -->

  <!-- services  -->
  <section class="services" id="OurOffices">
    <div class="heading">
      <div class="content">
        <h5 data-aos="fade-up">LIGHTING</h5>
        <h1 data-aos="fade-up" data-aos-delay="150">
          We use highly efficient lighting
        </h1>
      </div>
    </div>
    <br /><br />
    <div class="brand-container">
      <div class="brand-box">
        <img src="./assets/images/havells.png" alt="lighting company logo images" />
        
      </div>
      <div class="brand-box">
        <img src="./assets/images/syska.jpg" alt="lighting company logo images" />
      
      </div>
      <div class="brand-box">
        <img src="./assets/images/philips.jpg" alt="lighting company logo images" />
      
      </div>
      <div class="brand-box">
        <img src="./assets/images/wipro.jpg" alt="lighting company logo images" />
      
      </div>
      <div class="brand-box">
        <img src="./assets/images/bajaj.png" alt="lighting company logo images" />
      
      </div>
      <div class="brand-box">
        <img src="./assets/images/ignify.png" alt="lighting company logo images" />
      
      </div>
    </div>
  </section>
  <!-- /services  -->

  <!-- Footer  -->
  <footer class="footer">
    <div class="content">
      <h3>
        <a href="#home" class="logo">
          <i class="fa-solid fa-fill" style="border: none"></i>
          interiorX
        </a>
      </h3>
      <p>
        <b>interiorX</b>, we are dedicated to revolutionizing the way businesses thrive in today's dynamic landscape.
      </p>
      <div class="shar">
        <!-- <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-twitter"></i> -->
      </div>
    </div>
    <div class="link">
      <h3>links</h3>
      <li><a href="index.php">Home</a></li>
      <li><a href="#AboutUs">About Us</a></li>
      <li><a href="#Services">Services</a></li>
      <li><a href="login.php">Booking</a></li>
      <li><a style="color: rgb(250, 69, 9); " href="login.php">Login/Register</a></li>
    </div>
    <div class="our-servis">
      <h3>services</h3>
      <p>interior Design</p>
      <p>Furniture</p>
      <p>Painting</p>
      <p>Lighting</p>
    </div>
    <div class="Ournews">
      <h3>Developed By</h3>
      <p style="color: #cecece; font-size: 1.2rem;">
        DIVYA MODAK <br>
      
      </p>
    </div>
  </footer>

  <!-- anime-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 100,
      duration: 200,
    });
  </script>
  <!-- script main -->
  <script src="./assets/js/script.js" charset="utf-8"></script>
</body>

</html>