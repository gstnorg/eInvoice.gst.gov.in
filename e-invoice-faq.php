<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>e-Invoice</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./style/bootstrap.min.css" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/tricker.css" />
 <link rel="stylesheet" href="./style/font-awesome.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="./menu/megamenu.css" />
  <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)"
    href="./style/small-devices.css" />
</head>
<body class="init">
  <div class="mid-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
          <div class="site-branding ">
            <h1>
              <a href="index.php"><img src="images/Emblem_of_India-white.svg" alt="Indian Government Logo" />e-Invoice
              </a>
            </h1>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12">
          <div class="top-header">
            <div class="container">
              <nav>
                <a class="p-2 skip" href="#maincontent">Skip to Main Content</a>
                <a class="p-2 hidden" href="#"><i class="fa fa-adjust"></i></a>
                <a href="#" class="fresize f-up hidden">A<sup>+</sup></a>
                <a href="#" class="fresize f-up hidden">A<sup>-</sup></a>
              </nav>
            </div>
          </div>
          <span class="white_logo">
            <img src="images/logo_white.png" alt="GSTN logo" />
            <span style="display: none;" class="lang">
          </span>
        </div>
      </div>
    </div>
  </div>
  <?php include("./includes/header_nav.php"); ?>
  <div class="tickreader">
    <div class="container">
      <div class="js-conveyor-1">
        <ul>
          <li>
            Registration and Login for Rs 50-100 Cr. Taxpayers enabled on IRP.
          </li>
          <li>
            Rs. 50 Cr. + taxpayers started e-invoicing from 01st April 2021.
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="upcoming_container_main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>e-Invoice FAQ</h2>
          <div class="row">
            <div class="col-md-12"> <a routerlink="/einvoice-faqs" target="_blank" href="/einvoice-faqs">
                e-invoice - FAQs on Law/Procedure </a></div>
            <div class="col-md-12"> <a href="https://einvoice1.gst.gov.in/Others/Faqs" target="_blank">
                e-invoice - FAQs on IRP (Log in, Registration, User Management etc.) / Offline Utility
              </a></div>
            <div class="col-md-12"><a href="https://einv-apisandbox.nic.in/FaqsonAPI.html" target="_blank">
                e-invoice - FAQs on APIs / Sandbox </a></div>
            <br><br><br><br>
            <p>You may also visit e-invoice website: </p>
            <a href="https://einvoice1.gst.gov.in" target="_blank">https://einvoice1.gst.gov.in </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer start =-->
  <?php include("./includes/footer.php"); ?>
  <script>
    $(function () {
      $(".js-conveyor-1").jConveyorTicker({
        anim_duration: 200, // Specify the time (in milliseconds) the animation takes to move 10 pixels
        reverse_elm: false, // Enable the use of the reverse animation trigger HTML element
        force_loop: false // Force the initialization even if the items are too small in total width
      });
    });
  </script>
   <!-- Footer end =-->
</body>
</html>