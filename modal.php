<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="css/modal.css" />
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="shortcut icon" href="favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="scripts/cookies.js" defer></script>
  <script src="scripts/modal.js" defer></script>


</head>


<body>

  <div id="myModal" class="modalvip">
   <!-- Modal content -->
   <form class="vipform w3-container w3-center w3-animate-top" action="action.php" method="post" onsubmit="return checkfoorm(this);">
     <span id="closeformbutton" class="close">&times</span>
     <div class="form-content-wrapper">
     <p class="form-header-text">Feel Healthy In Your Skin</p>
     <p class="form-body-text">Sign up for text messages on all of our specials, flash sales, and all things wellness.</p>

     <input type="text" id="name" name="name" placeholder="Your Name"><br>
     <input type="email" id="email" name="email" placeholder="Your Email"><br>
     <input class="bottom-input" type="tel" id="tel" name="tel" placeholder="Your Cell Phone Number">
     <input class="bottom-input" type="date" id="date" name="date" placeholder="Date of Birth"><br>
     <input class="modal-input-button" id="formsubmit" type="submit" value="Sign Up">
 </form>
 </div>
 </div>



</body>
</html>
