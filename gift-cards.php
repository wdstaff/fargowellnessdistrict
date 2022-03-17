<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FARGO WELLNESS DISTRICT</title>
  <meta http-equiv="Content-Security-Policy" content="script-src 'self' https://www.paypal.com/sdk/js https://www.google-analytics.com/ https://www.googletagmanager.com/gtag/js https://kit.fontawesome.com https://tag.simpli.fi/sifitag/9ac9d0f0-ef72-0137-6109-06659b33d47c https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js http://www.googletagmanager.com/gtag/js https://i.simpli.fi/p" />
  <link rel="stylesheet" type="text/css" href="css/gift-cards.css" />
  <meta name="description" content="Fargo Wellness District Is The Premier Botox&reg, Dermal Filler & Medical Weight Loss Clinic In The Fargo Moorhead Area. We Take The Time. It's What We Do." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- lato font !-->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
  <!-- W3 Animations !-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel=”canonical” href=”https://fargowellnessdistrict.com” />
  <script src="scripts/gift-cards.js" defer></script>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>



</head>

<body id="body">
  <main>
  <?php include 'wdheader.php' ?>

  <section class="gift-cards-section">
    <img class="gift-card-img" src="pics/giftcard.jpg">

    <div class="smart-button-container" id="smart-button-container">

        <div style="text-align: center"><label for="amount">GIFT CARD AMOUNT </label><input name="amountInput" type="number" id="amount" value="" ><span> USD</span></div>
          <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
        <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
          <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
        <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
      </div>

  </section>



    <section class="third section">
      <h3 class="third-header">Check Out Our Monthly Specials</h3>
      <a class="index-button" href="monthly-specials.php">Monthly Specials</a>
    </section>

  <?php include 'staff-carousel.php' ?>

<div class="funky-background">
  <img class="decal" src="pics/decal.png" />

<section class="testimonials_section">
    <iframe class="testiholder" loading="lazy" title="Client Reviews for Fargo Wellness District's aesthetic treatments and spa services" src="https://app.getsmiles.com/Testimonials.aspx?pid=812830&amp;format=1" width='90%' height="400px"></iframe>


</section>
</div>
</main>




<div class="sticky-schedule">
  <a class="sticky-schedule-link" href="https://schedulingapp.mypatientnow.com/Account/Login/719" target="_blank" rel="noopener noreferrer"><i class="far fa-calendar-alt line calendar"></i></a>
  <a class="sticky-schedule-link" href="https://schedulingapp.mypatientnow.com/Account/Login/719" target="_blank" rel="noopener noreferrer"><p class="sticky-schedule-text">Book A Consultation</p></a>
</a>
</div>
<?php include 'wdfooter.php' ?>
</body>
</html>
