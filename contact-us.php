<!DOCTYPE html>
<html>
<head>

  <title>CONTACT US</title>
  <meta name="description" content="Use This Page To Contact Us... We Would Love To Hear From You.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/contact-us.css"/>
  <!-- Lato Font Link -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
</head>
<body>

  <?php include 'wdheader.php' ?>

  <main>


    <h1 class="page_header"><a>CONTACT US</a></h1>
    <p class="paragraph_header centertext">Spencer Berry, M.D. and all of our providers are very committed to their patients’ safety, success and satisfaction. We strive to be the premier weight loss and aesthetic clinic in all of these aspects and our customer service is unparalleled. If you need an appointment outside of our hours of operation, give us a call and we will make time for you, our valued patient.
    </p>

      <form class="contact-us-class" action="action.php" method="post">
      <label for="fname">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name..">

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Your Email Address..">

      <label for="tel">Phone Number</label>
      <input type="tel" id="tel" name="tel" placeholder="Your Cell Phone Number..">


      <label for="subject">What is your message?</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <button class="form_submit_button" type="submit" value="Submit">SUBMIT</button>
      </form>

      <p class="paragraph_header topper bottom centertext">
          Address:
          <br>
          <a href="https://www.google.com/maps/place/Wellness+District+Medical+Weight+Loss+%26+Aesthetics/@46.8324848,-96.8946545,17z/data=!3m1!4b1!4m5!3m4!1s0x52c8ccc072b5fb0d:0x8f1bc6872f8c3979!8m2!3d46.8324848!4d-96.8924658">435 32nd Ave. East West Fargo, ND 58078</a>
          <br><br>
          Tel: <a href="tel:701-205-3088">701-205-3088</a>
          <br>
          Fax: 701-335-7808
          <br>
          Email: <a href="mailto:staff@fargowellnessdistrict.com">staff@fargowellnessdistrict.com</a>
​         <br><br>
          Office Hours:
          <br>
          Mon - Thurs: 9:00am - 6:00pm
          <br>
          Fridays: 9:00am - 4:00pm
          <br>
          Saturdays: By Request
        </p>

  </main>

</body>
<?php include 'wdfooter.php' ?>
</html>
