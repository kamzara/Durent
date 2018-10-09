<!--
  *
  * Index page (main page for this website)
  *
 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Durent</title>
    <!---------------------------------------------------------------------------------------------------------------->
    <script src="./js/app.js" charset="utf-8"></script>
    <!---------------------------------------------------------------------------------------------------------------->
    <script src="./js/jQuery.js" charset="utf-8"></script>
    <!---------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="./css/main.css">
    <!---------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="./css/nav.css">
    <!---------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="./css/normal.css">
    <!---------------------------------------------------------------------------------------------------------------->
  </head>
  <body>

    <!-- Navigator on the top of all pages -->
    <nav>
      <!-- Navigator bar for computer width -->
      <div class="container">
        <ul id="navMain">
          <div class="navLeft">
            <li><a style="padding-left:0px;" href="index.php">Durent</a></li>
          </div>
          <div class="navCenter">
            <li><a href="#">About</a></li>
            <li><a href="#">Find</a></li>
            <li><a href="#">Rent Out</a></li>
          </div>
          <div class="navRight">
            <li><a href="index.php?login">Log In</a></li>
            <li><a style="padding-right:0px;" href="index.php?signup">Sign Up</a></li>
          </div>
        </ul>
      </div>
      <!-- Navigator bar for mobile width -->
      <div id="navToggle"><img id="navMenu" src="./assets/static/menu.png"></div>
      <ul id="navMedia">
        <li><a href="index.php?signup">Sign Up</a></li>
        <li><a href="index.php?login">Log In</a></li>
        <li><a href="#">home</a></li>
        <li><a href="#">home</a></li>
      </ul>
    </nav>

    <!-- Templates for each page -->
    <?php
      if (isset($_GET['signup'])) require './pages/signup.php';
      else if (isset($_GET['login'])) require './pages/login.php';
      else if (isset($_GET['afterSignup'])) require './pages/afterSignup.php';
      else if (isset($_GET['afterLogin'])) require './pages/afterLogin.php';
      else require './pages/waterfall.php'
    ?>

    <!-- Footer of all pages -->
    <footer style="display:flex; overflow:hidden; font-size:14px; padding-top:40px; padding-bottom:20px;" class="footer">
      <div style="flex:1;"></div>
      <div style="flex:4; border-top:1px solid #ddd;">
        <p>The Rental</p>
          <div style="display:flex; overflow:hidden; flex:4; padding-bottom:20px;">
            <div style="flex:1;" class="lFooter">
              <p>Learn</p>
              <a href="#">How to retire</a><br>
              <a href="#">How to drop</a><br>
              <a href="#">How to get F</a>
            </div>
            <div style="flex:1;" class="mlFooter">
              <p>For Renter</p>
              <a href="#">Make a first rent</a><br>
              <a href="#">How to get money</a><br>
              <a href="#">How to get location</a><br>
              <a href="#">How to make you rich</a>
            </div>
            <div style="flex:1;" class="mrFooter">
              <p>For Lessor</p>
              <a href="#">Make a first lease</a><br>
              <a href="#">How to pay money</a><br>
              <a href="#">How to get location</a><br>
              <a href="#">How to save the money</a>
            </div>
            <div style="flex:1;" class="rFooter">
              <p>Contact Us</p>
              <a href="#">Email:</a><br>
              <a href="#">Tel:</a><br>
              <a href="#">Line:</a><br>
              <a href="#">Facebook:</a>
            </div>
        </div>
        <div style="display:flex; overflow:hidden; border-top:1px solid #ddd; padding-top:10px;">
          <div style="flex:2;">
            <span>Copyright © 2018 SIIT Inc. All rights reserved.</span>
          </div>
          <div style="flex:2;">
            <span>
              <a style="padding-left:4px; padding-right:4px;" href="#">privacy</a>|
              <a style="padding-left:4px; padding-right:4px;" href="#">legal</a>|
              <a style="padding-left:4px; padding-right:4px;" href="#">site map</a>
            </span>
          </div>
          <div style="flex:1;">
            <span>SIIT Information Technology</span>
          </div>
        </div>
      </div>
      <div style="flex:1;"></div>
    </footer>

  </body>
</html>