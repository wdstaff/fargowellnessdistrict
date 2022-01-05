<!DOCTYPE html>
<html>
<head>
  <title>FARGO WELLNESS DISTRICT</title>
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <meta name="description" content="Fargo Wellness District Is The Premier Botox, Dermal Filler & Medical Weight Loss Clinic In The Fargo Moorhead Area. We Take The Time. It's What We Do." />
  <meta name="viewport" width="width=device-width, initial-scale=1.0" />
  <!-- lato font !-->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
  <!-- W3 Animations !-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <main>
  <?php include 'wdheader.php' ?>

  <div class="homepage-titantron">
  <img class="homepage-header" src="pics/frontpage.jpg" />
    <div id="homepage-header-decal-container" class="homepage-header-decal-container">
      <img class="homepage-header-decal" src="pics/top500.png" />
  <a class="homepage-appt-button" href="https://schedulingapp.mypatientnow.com/Account/Login/719">Book an appointment</a>
    </div>
</div>

    <section class="first section w3-container w3-center w3-animate-bottom">
      <p class="section-p-text">ALLERGAN HANDPICKS THE “TOP 500” AESTHETIC PRACTICES IN THE USA. THE AWARD IS AMONG THE HIGHEST RECOGNITIONS AN AESTHETIC PRACTICE CAN ACHIEVE. THE TOP 500 IN THE NATION AWARD PLACES WELLNESS DISTRICT IN THE TOP 1% OF ALL PRACTICES ACROSS THE NATION! IT IS BECAUSE OF OUR AMAZING PATIENTS AND STAFF THAT WE ARE ABLE TO ACHIEVE THIS HONOR!</p>
    </section>

    <section class="second section">
      <div class="second-section-item item1"><a href="botox.php"><img class="pink-pic" src="pics/icon1.png"></a><h2 class="item-header">Injectables</h2><p class="item-p">Relax wrinkles with Botox and restore facial volume with signature dermal filler treatments like our one of a kind mid face rejuvanation.</p></div>
      <div class="second-section-item item2"><a href="weight-loss-services.php"><img class="pink-pic" src="pics/icon2.png"></a><h2 class="item-header">Weight Loss</h2><p class="item-p">Improve your overall health with our medical weight loss nutritional program, over 10 years of experience.</p></div>
      <div class="second-section-item item3"><img class="pink-pic" src="pics/icon3.png"><h2 class="item-header">Body Contouring</h2><p class="item-p">Get the newest body contouring technology at Fargo Moorhead's first and only CoolSculpting Elite Clinic. </p></div>
    </section>
    <div class="learncont"><a class="second-section-link" href="#">Learn More</a></div>

    <section class="third section">
      <h3 class="third-header">Check Out Our Monthly Specials</h3>
      <a class="index-button" href="monthly-specials.php">Monthly Specials</a>
    </section>

    <section class="fourth section">
      <h3 class="fourth-header">Meet Our Amazing Team</h3>
      <a class="index-button" href="#">Meet the team</a>

    </section>
    <div class="carouselins"><?php include 'carousel.php' ?></div>

<script src="scripts/vip-form.js"></script>
 <div id="myModal" class="modalvip">
  <!-- Modal content -->
  <form class="vipform w3-container w3-center w3-animate-top">
    <span class="close" onclick="closeform()">&times</span>
    <div class="form-content-wrapper">
    <p class="form-header-text">Feel Healthy in Your Skin</p>
    <p class="form-body-text">Sign up for text messages on all of our specials, flash sales, and all things wellness.</p>

    <input type="text" id="name" name="name" placeholder="Your Name"><br>
    <input type="email" id="email" name="email" placeholder="Your Email"><br>
    <input class="modal-input-button" id="formsubmit" type="submit" value="Sign Up">
</form>
</div>
</div>

<div class="funky-background">
  <img class="decal" src="pics/decal.png" />

<section class="testimonials_section">
    <iframe class="testiholder" loading="lazy" title="Client Reviews for Fargo Wellness District's aesthetic treatments and spa services" src="https://app.getsmiles.com/Testimonials.aspx?pid=812830&amp;format=1" width='90%' height="400px"></iframe>


</section>
</div>
</main>
<div class="sticky-schedule">
  <a class="sticky-schedule-link" href="https://schedulingapp.mypatientnow.com/Account/Login/719"><i class="far fa-calendar-alt line calendar"></i></a>
  <a class="sticky-schedule-link" href="https://schedulingapp.mypatientnow.com/Account/Login/719"><p class="sticky-schedule-text">Book a consultation</p></a>
</a>
</div>
<?php include 'wdfooter.php' ?>

</script>
</body>
</html>
