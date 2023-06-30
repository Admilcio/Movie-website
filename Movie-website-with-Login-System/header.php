


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
  <title>Movierrific </title>
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
        <a href="index.php">Movierrific</a> 
      </div>
      <div class="nav-toggle ">
        <span></span>
      </div>
      <nav class="nav">
        <ul>
          <li><a href="#home">Home</a></li>
          <!-- <li><a href="#about">About</a></li>
          <li><a href="#categories">Categories</a></li>
          <li><a href="#toprated">Top-Rated</a></li> -->
          <li><a href="#about">About Us</a></li>
                <?php 
            if (isset($_SESSION["userid"])){
              echo "<li><a href='profile.php'>Profile page</a></li>";
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
        <h2>Welcome to Movierrific</h2>

        <div class="search"><input type="text" placeholder="Enter keywords here..." class="input-search "> <button type="button" class="btn-search"> Search</button></div>
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

 