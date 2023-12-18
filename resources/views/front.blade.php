<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Include JQuery -->
    <link rel="stylesheet" href="jquery-ui-1.13.2/jquery-ui.css">
    <script src="jquery.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
  
    
    
  </head> 
  <body>
    <!-- Navbar Section Starts -->
    <header class="navigation">
      <h2>LOGO HERE</h2>
      <nav>
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </nav>
    </header>

    <!-- Main section Starts -->
    <main class="grid">
      <!-- Left menu -->
      <div class="profile-summary">
        <img src="assets/Profile.png" id="profile-pic" alt="" />
        <h2>Rayan Adlardard</h2>
        <p>Font-end Developer</p>

        <div class="social-icons">
          <a href="#"><img src="assets/Icons-facebook.png" alt="" /></a>
          <a href="#"><img src="assets/Icons-instagram.png" alt="" /></a>
          <a href="#"><img src="assets/Icons-dribbble.png" alt="" /></a>
          <a href="#"><img src="assets/Icons-twitter.png" alt="" /></a>
          <a href="#"><img src="assets/Icons-Youtube.png" alt="" /></a>
        </div>

        <div class="profile-box">
          <div class="profile-bio">
            <p class="highlighted">Age:</p>
            <p>24</p>
          </div>
          <div class="profile-bio">
            <p class="highlighted">Residence:</p>
            <p>Block 2</p>
          </div>
          <div class="profile-bio">
            <p class="highlighted">Freelance</p>
            <p id="freelance">Available</p>
          </div>
          <div class="profile-bio">
            <p class="highlighted">Address:</p>
            <p>Dhaka,Bangladesh</p>
           
          </div>
        </div>
        <div class="skills-section">
          <div id="progressbar"></div>
        </div>
       
      </div>
      

      <!-- main section -->
      <div class="main-profile">
         <div class="text">
          <h2>I’m Rayan Adlrdard <span  id= "hero-text"style="color:#FFB400;">Front-end</span> Developer</span></h2>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, volutpat feugiat placerat lobortis.
             Natoque rutrum semper sed suspendisse nunc lectus.</p>

             <button class="hero-button"> Hire Me </button>
            
         </div>
         <div class="banner-img">
           <img src="assets/banner-imhg.png" alt="">
         </div>
        
      </div>
    </main>


    <script>
      
$( function() {
  $( "#progressbar" ).progressbar({
    value: 80
  });
} );

    </script>
    <script src="index.js"></script>
  </body>
</html>
