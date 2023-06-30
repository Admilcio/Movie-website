<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.css">
  <link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.structure.css">
  <link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.theme.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <title>Movierrific</title>
</head>
<body>
   
<!-- Preloader -->

<div class="preloader">
  <div class="loader">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>

      <div class="indicator"> 
          <svg width="16px" height="12px">
              <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
              <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
          </svg>
      </div>
  </div>
</div>
 <!-- Preloader Ends -->


 <!-- Head section starts -->

 <header class="header">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="brand-name">
        <a href="#home">Movie Mania</a> 
      </div>
      <div class="nav-toggle ">
        <span></span>
      </div>
      <nav class="nav">
      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#categories">Categories</a></li>
          <li><a href="#toprated">Top-Rated</a></li>
                <?php 
            if (isset($_SESSION["userid"])){
              echo "<li><a href='logout.php'>Log out</a></li>";
            }
            else{
              echo "<li><a href='signup.php'>Sign Up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        
        </ul>
      </nav>
    </div>
  </div>
 </header>

 <!-- Header ends here -->



 <!-- Home section starts -->

 <section class="home-section" id="home">
   <!-- Shape rotating -->
   <div class="shape-01">
      <img src="img/square-regular.svg" alt="Square shape">
   </div>
   <div class="container">
    <div class="row align-items-center">
      <div class="home-content">
        <h4>Download your favourite Movie in just a click</h4>
        <h2>Welcome to Movie Mania</h2>        

        <div class="search"><input type="text" placeholder="Enter keywords here..." class="input-search input-search-js"> <button type="button" class="btn-search"> Search</button></div>

        <?php 
            if (isset($_SESSION["userid"])){
              echo "<h3>Find any movie you want! </h3>" ;
            }
            echo "<h4 class='h3-style'>" . $_SESSION['useruid'] . "</h4>";
          ?>
      </div>
      </div>
    </div>
    <!-- Scroll down -->
   <!--  <a href="#about" class="scroll-down">
      <img src="img/arrow-down-solid.svg" alt="scroll down">
    </a> -->
    
<a href="#about"> <svg class="arrows" id="arrow"> 
  <path class="a1" d="M0 0 L30 32 L60 0"></path>
  <path class="a2" d="M0 20 L30 52 L60 20"></path>
  <path class="a3" d="M0 40 L30 72 L60 40"></path>
</svg> </a>



   </div>
 </section>
 
 <!-- Home section Ends -->

<!-- About Section starts -->

<section class="about-section" id="about">
  <div class="container">
    <div class="row">
      <div class="img-box">
        <div class="shape-02"></div>
        <img src="img/movie-cut.jpg" alt="About US">
        <div class="paragraph">
          <div class="row">
            <div class="section-title">
              <h1>About Us</h1>
            </div>
          </div>
          <p>Welcome to <b>MOVIERRIFIC</b>, your ultimate destination for all the movies! We are passionate about movies and dedicated to providing you with an immersive and enjoyable experience in the world of cinema. <br> At our website, we believe in the power of storytelling and the magic of the silver screen. We understand that movies have the ability to transport us to different worlds, evoke a range of emotions, and spark meaningful conversations. With that in mind, we have created a platform that celebrates the art of filmmaking and serves as a hub for movie lovers worldwide.</p>
          
          <div class="about-content">
            <div class="stats">
              <div class="row">
                <div class="stat-box">
                  <h2>150K+</h2>
                  <h5>Daily Downloads</h5>
                </div>
                <div class="stat-box">
                  <h2>2500K+</h2>
                  <h5>Movies Available</h5>
                </div>
                <div class="stat-box">
                  <h2>1M+</h2>
                  <h5>Happy Clients</h5>
                </div>
              </div>
            </div>
            <!-- Contact button -->
      
            <a href="#contact" class="btn btn-01">Contact Us</a>
           </div>
        </div>
      </div>
    </div>


  </div>
</section>

<!-- About Section Ends -->
 
<!-- Categories section Starts -->

<section class="service-section" id="categories">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h1>Categories</h1>
      </div>
    </div>
    <div class="row">
      <!-- Categories start -->
      <div class="service-item">
        <div class="service-item-inner">
          <img src="img/western-category.jpg" alt="category 1">
          <div class="overlay">
            <h3>Western</h3>
          </div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-item-inner">
          <img src="img/mystery-category.jpg" alt="category 2">
          <div class="overlay">
            <h3>Mystery</h3>
          </div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-item-inner">
          <img src="img/drama-caategory.jpeg" alt="category 3">
          <div class="overlay">
            <h3>Drama</h3>
          </div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-item-inner">
          <img src="img/fantasy-category.jpg" alt="category 4">
          <div class="overlay">
            <h3>Fantasy</h3>
          </div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-item-inner">
          <img src="img/comedy-category1.jpg" alt="category 5">
          <div class="overlay">
            <h3>Comedy</h3>
          </div>
        </div>
      </div>
      <div class="service-item">
        <div class="service-item-inner">
          <img src="img/Animation-category.jpeg" alt="category 6">
          <div class="overlay">
            <h3>Animation</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Category section ends -->


<!-- Top rated section start -->



<section class="work-section">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h1 id="toprated">Top-Rated Movies</h1>
      </div>
    </div>
    <div class="row">
      <!-- Top-rated movies start -->
      <div class="work-item">
        <div class="work-item-inner">
          <img src="img/Doctor-strange.jpg" data-large ="img/doctor-strange-png.png" alt="Movie 1">
          <div class="overlay">
            <h4>Doctor Strange</h4>
          </div>
        </div>
      </div>
      <div class="work-item">
        <div class="work-item-inner">
          <img src="img/captain marvel.jpg" data-large ="img/captain-marvel-png.png" alt="Movie 2">
          <div class="overlay">
            <h4>Captain Marvel</h4>
          </div>
        </div>
      </div>
      <div class="work-item">
        <div class="work-item-inner">
          <img src="img/aquaman.jpg" data-large ="img/aquaman-png.jpeg" alt="Movie 3">
          <div class="overlay">
            <h4>Aquaman</h4>
          </div>
        </div>
      </div>
      <div class="work-item">
        <div class="work-item-inner">
          <img src="img/x-men4.jpg" data-large ="img/Xmen-png.png" alt="Movie 4">
          <div class="overlay">
            <h4>X-Men</h4>
          </div>
        </div>
      </div>
      <div class="work-item">
        <div class="work-item-inner">
          <img src="img/guardians-of-the-galaxy1.jpg" data-large ="img/guardians-of-the-galaxy-png.png" alt="Movie 5">
          <div class="overlay">
            <h4>Guardians of the Galaxy</h4>
          </div>
        </div>
      </div>
      <div class="work-item">
        <div class="work-item-inner">
          <img src="img/Dark-Knight.jpg" data-large ="img/Dark-Knight-png.png" alt="Movie 6">
          <div class="overlay">
            <h4>The Dark Knight</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Top rated movies ends here -->


<!-- Contact section starts  -->

<section class="contact-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="contact-img">
      <div class="img-box">
        <div class="section-title">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="contact-form">
      <form class="form">
        <div class="row">
          <div class="left input-group">
            <label for="text">Name</label>
            <input type="text" placeholder="Your name here" class="input-control">
          </div>
          <div class="right input-group">
            <label for="text">Email or phone</label>
            <input type="text" placeholder="Your Email or Phone Here" class="input-control">
          </div>
        </div>
        <div class="row">
          <div class="input-group">
            <label for="text">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="input-control" placeholder="Your Message Here"></textarea>
          </div>
        </div>
        <div class="form-btn">
          <button type="button" class="btyn btn-01" id="button">Send Message</button>
        </div>
        <div id="dialog">
          Thank you for contacting us. We'll get back to you soon. Don't forget to check you Email!
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="contact-info">
      <div class="row">
        <div class="info-item">
          <h5>Address</h5>
          <p>Sec-XYZ, USA, 12211</p>
        </div>
        <div class="info-item">
          <h5>Phone</h5>
          <p>91 000 000 000</p>
        </div>
        <div class="info-item">
          <h5>Email</h5>
          <p>movierrific@movie.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="social-links">
      <a href="#" title="faebook"><img src="img/facebook.svg" alt="facebook"></a>
      <a href="#" title="Twitter"><img src="img/twitter.svg" alt="Twitter"></a>
      <a href="#" title="Linkedin"><img src="img/linkedin.svg" alt="Linkedin"></a>
      <a href="#" title="Instagram"><img src="img/instagram.svg" alt="Instagram"></a>
    </div>
  </div>
</section>

<p class="copyright">&copy; 2022 Movierrific</p>


<!-- Light Box starts -->

<div class="lightbox">
  <div class="img-box">
    <div class="lightbox-close">&times;</div>
    
    <img class="lightbox-img" src="img/captain marvel.jpg" alt="img1" >
    <div class="lightbox-caption">
      <div class="lightbox-category">


      </div>
      <div class="lightbox-counter">

        
      </div>
    </div>
    <div class="lightbox-controls">
      <div class="prev">
       <img src="img/backward-solid.svg" alt="previous">
      </div>
      <div class="next">
        <img src="img/forward-solid.svg" alt="next">
      </div>
    </div>
  </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="index.js" type="text/javascript"></script>
<script src="jquery-ui-1.13.2.custom/jquery-ui.js" type="text/javascript"></script>
</body>
</html>