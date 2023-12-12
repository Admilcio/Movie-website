<?php
  include_once "header.php"
?>
 
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
          <p>Welcome to <b>MOVIERRIFIC</b>, your ultimate destination for all the movies! We are passionate about movies and dedicated to providing you with an immersive and enjoyable experience in the world of cinema <br> At our website, we believe in the power of storytelling and the magic of the silver screen. We understand that movies have the ability to transport us to different worlds, evoke a range of emotions, and spark meaningful conversations. With that in mind, we have created a platform that celebrates the art of filmmaking and serves as a hub for movie lovers worldwide.</p>
          
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
      
            <a href="login.php" class="btn btn-01 ">Log In</a>
           </div>
        </div>
      </div>
    </div>


  </div>
  </section>

  <section class="form-section">
    <div id="need-signup"></div>
  <div class="signup-form">
   <div class="vertical-line">
   </div>
    <div class="signup-form-form">
  <h1>Sign Up</h1>
  <form action="includes/signup.inc.php" method="POST" id="myform">
  Name: <input type="text" name="name" placeholder="Full name" required>
  Email: <input type="text" name="email" placeholder="Email" required>
  Username: <input type="text" name="uid" placeholder="Username" required>
  Password: <input type="password" name="pwd" placeholder="Password" required>
  Repeat Password: <input type="password" name="pwdrepeat" placeholder="Repeat Password" required>
  <button type="submit" name="submit" id="btn">Sign Up</button>
    </form>
    </div>
    </section>
    <div class="php">
    <?php 
if(isset($_GET["error"])) {
  if($_GET["error"]== "emptyinput"){
    echo "<p> Fill in all fields!</p>";
  }
  else if ($_GET["error"] == "invaliduid"){
    echo "<p> Choose a proper username!</p>";
  }
  else if ($_GET["error"] == "invaliemail"){
    echo "<p> Choose a proper email!</p>";
  }
  else if ($_GET["error"] == "passwordsdontmatch"){
    echo "<p>Passwords doesn't match!</p>";
  }
  else if ($_GET["error"] == "stmtfailed"){
    echo "<p> Something went wrong, try again!</p>";
  }
  else if ($_GET["error"] == "usernametaken"){
    echo "<p>Username already taken!</p>";
  }
  else if ($_GET["error"] == "none"){
    echo "<p style> You have signed up!</p>";
  }
}

?>
    </div>

    
  </div>

  <p class="copyright">&copy; 2022 Movierrific</p>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="index.js" type="text/javascript"></script>
<script src="jquery-ui-1.13.2.custom/jquery-ui.js" type="text/javascript"></script>

</body>
</html>