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
              <a href="index.php"><img src="images/Emblem_of_India-white.svg" />e-Invoice
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
            <img src="images/logo_white.png" />
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
        <div class="col-md-12 section-tittle mb-3 pt-3">
          <h2>How to Generate IRN</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>Through Integration via APIs:</h5><br>
          <h6 class="dark-txt"><i>Taxpayers with Aggregate Turnover of < Rs. 500 Crores<br></i></h6><br>
          <p><strong><u>Through E-Way Bill APIs</u></strong> – If the taxpayer already has direct access to E-Way Bill
            APIs, then they can use the same Client Id, Client Secret, username and password to get access to e-Invoice
            system.</p>
          <p><strong><u>Through GSPs</u></strong> – the taxpayer can connect through GSPs. In this case, the GSTIN
            generates their own username and password, ties up with GSPs to get access to e-invoice APIs using the
            Client ID and Client Secret of GSPs.</p>
          <p><strong><u>Through ERPs or Billing/Accounting Software Service Providers</u></strong> – the taxpayer can
            connect through select ERPs and Billing/Accounting Software Service Providers. In this case, the GSTIN
            generates their own username and password and ties up with ERPs or Billing/Accounting Software Service
            Providers, to get access to e-invoice APIs, using the Client ID and Client Secret of said providers.</p>
          <p><strong><u>Through Entities having direct Access to APIs</u></strong> – If the taxpayer (e.g. certain
            automobile companies) has tie up or using the ERP of the entity which has direct access to API, then they
            can access e-invoice APIs through that entity. In this case, the GSTIN generates their own username and
            password and gets access to e-invoice APIs, using Client ID and Client Secret of the entity which has such
            access.</p>
          <br>
          <h6 class="dark-txt"><i>Taxpayers with Aggregate Turnover of > Rs. 500 Crores</i></h6><br>
          <p>In addition to above modes, they will have direct access, as follows:</p>
          <p><strong><u>Direct Access to API</u></strong> – They can get direct access to API to integrate with their
            ERP system. They need to whitelist their public IPs. In addition to username and password to each GSTIN of
            the entity, the entity gets the Client ID and Client Secret to get access to e-invoice APIs.</p>
          <p><strong>Through Offline Utility / Bulk Generation Tool (Any Taxpayer):</strong></p>
          <p>Some businesses may not have their own ERP/Accounting Software or have few invoices to report. For any
            other reason, they may not be able to integrate directly with IRP or not able to connect through GSPs/ERPs.
          </p>
          <p>Such taxpayers can download the free offline utility ('bulk generation tool') from e-invoice portal. In
            this utility, details of invoices can be entered and can be easily uploaded on IRP, for generation of IRN.
            While the portal gives back ‘machine-readable’ invoice in JSON format, there is also a facility to generate
            'human-readable' PDF copy of invoice (for save/print/e-mail etc.).</p>
          <p>After obtaining IRN, the invoice (with QR Code) can be issued to the recipient in the same way as is being
            done now. (Note: An integrated mechanism to enable system-to-system exchange of e-invoices will be made
            available in due course.)</p>
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