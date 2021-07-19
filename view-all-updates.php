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
  <script src="./menu/scale.fix.js"></script>
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
  <div class="upcoming_container_main update">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-tittle mb-3 pt-3">
          <h2>Earlier Updates</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="update-news">
            <ul>
              <li>
                <div class="date">01 JAN 2021</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Documents/Gepp_Tool_Note.pdf" target="_blank">GePP[Version 1.0] - GST e -Invoice Preparing and Printing Tool is released in
                  the e-Invoice Portal</a></div>
              </li>
              <li>
                <div class="date">15 DEC 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Documents/GuidelinesforTaxpayerswithTORs.pdf" target="_blank">Registration and Login for taxpayers with TO Rs 100-500 Crores is enabled</a>
                </div>
              </li>
              <li>
                <div class="date">12 NOV 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Notifications/notfctn-88-central-tax-english-2020.pdf" target="_blank">From 01-01-2021, e-invoicing mandatory for taxpayers with aggregate turnover
                  more than Rs. 100 Cr</a></div>
              </li>
              <li>
                <div class="date">09 OCT 2020</div>
                <div class="date-content"><a href="https://www.gst.gov.in/newsandupdates/read/405" target="_blank">e-Invoicing – Relaxation and latest changes</a></div>
              </li>
              <li>
                <div class="date">09 OCT 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Others/TaxpayerSearch" target="_blank">GSTINs can be updated with latest information from the GST Common Portal [Search -> Tax Payer / GSTIN]</a></div>
              </li>
              <li>
                <div class="date">14 SEP 2020</div>
                <div class="date-content"><a href="https://www.gstn.org.in/assets/mainDashboard/Pdf/GST%20e-invoice%20System%20-%20FAQs.pdf" target="_blank">Updated FAQs on e-invoice released</a></div>
              </li>
              <li>
                <div class="date">14 SEP 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Documents/B2B_einvoiceQRCodevsB2CDynamicQRCode.pdf" target="_blank">B2B e-invoice QR Code vs. B2C Dynamic QR Code: Know the Differences</a></div>
              </li>
              <li>
                <div class="date">11 SEP 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Documents/Validations_Improvements.pdf" target="_blank">Updates on validations</a></div>
              </li>
              <li>
                <div class="date">07 SEP 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Documents/einvoice_release.pdf" target="_blank">Updates on Help section and release of registration for e-invoice enablement
                  and Mobile apps</a></div>
              </li>
              <li>
                <div class="date">15 AUG 2020</div>
                <div class="date-content"><a href="https://einvoice1.gst.gov.in/Home/" target="_blank">Release of e-invoice1 portal</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <br><br>
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