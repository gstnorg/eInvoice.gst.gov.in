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
                <a  href="#" class="fresize f-up hidden">A<sup>+</sup></a>
                <a  href="#" class="fresize f-up hidden">A<sup>-</sup></a>
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
  <div class="about_container">
    <div class="container">
      <div class="row about-container_inner">
        <div class="col-sm-4">
          <div id="myCarousel" class="carousel slide vert" data-ride="carousel" data-interval="9000">
            <ul class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <h4>
                    What is e-invoice?
                  </h4>
                  <p>
                    Notified taxpayers to upload invoice particulars on Invoice Registration Portal (IRP) and obtain an
                    Invoice Reference Number (IRN).
                  </p>
                  <p>
                    The invoice copy containing inter alia, the IRN (embedded within QR Code) issued by the notified
                    supplier to buyer is commonly referred to as<br> <i><strong>'e-invoice'</strong></i>.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h4>
                    e-invoice – Benefits for Businesses
                  </h4>
                  <p>
                    Auto-reporting of invoices into GST return<br>
                    Auto-generation of e-way bill (where required)<br>
                    Standardisation and interoperability <br>
                    Reduction of disputes among transacting parties,
                  </p>
                  <p>
                    Improved payment cycles, Reduction of processing costs Overall business efficiency
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h4>
                    Facilitates e-exchange of invoices among businesses
                  </h4>
                  <p>
                    The standard format of e-invoice facilitates seamless exchange of invoices between accounting
                    systems of suppliers and buyers.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <h4>Quick Links</h4>
          <div class="topics">
            <div class="container-link">
              <div>
                <a href="./how-to-generate-IRN.php">How to Generate
                  IRN</a>
              </div>
            </div>
            <div class="container-link">
              <div>
                <a target="_blank" href="./downloads/english-version-1.2-Dt-30-3-2021.pdf">e-Invoice - At a Glance</a>
              </div>
            </div>
            <div class="container-link">
              <div>
                <a target="_blank" href="https://einvoice1.gst.gov.in/Others/EinvEnabled">Check Enablement Status</a>
              </div>
            </div>
            <div class="container-link">
              <div>
                <a target="_blank" href="https://einvoice1.gst.gov.in/Home/Enablement">Enable Me for e-Invoice</a>
              </div>
            </div>
            <div class="container-link">
              <div>
                <a target="_blank" href="https://einvoice1.gst.gov.in/Others/GSTINsGeneratingIRN">GSTINs generating
                  IRNs</a>
              </div>
            </div>
            <div class="container-link">
              <div>
                <a target="_blank" href="https://einvoice1.gst.gov.in/Others/QRCodeVerifyApp">Verify QR Code Mobile
                  App</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <h4>What’s New</h4>
          <ul id="nt-example1">
            <li>
              <a href="view-all-updates.php">Registration and Login for taxpayers with TO Rs 50-100 Crores is
                enabled.</a>
              <span class="txt-date">16 Mar</span>
            </li>
            <li>
              <a href="view-all-updates.php">Rs. 50 Cr. + taxpayers to start e-invoicing from 01st April 2021 –
                Notification Issued</a>
              <span class="txt-date">8 Mar</span>
            </li>
            <li>
              <a href="view-all-updates.php">Updates in e-Invoice Portal.</a>
              <span class="txt-date">28 Jan</span>
            </li>
        
          </ul>
          <a href="view-all-updates.php" class="view-more">earlier updates</a>
        </div>
      </div>
    </div>
  </div>
  <div class="impt_links" style="background: #01569d;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p> <a class="alink" href="tel:0120-488999"> e-Invoice Helpline: 1800-103-4786</a></p>
        </div>
        <div class="col-md-6">
          <p><a target="_blank" href="https://selfservice.gstsystem.in/"> e-invoice - Self Service Portal</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="upcoming_container_main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>e-Invoice</h2>
          <p>The GST Council, in its 37th meeting held on 20th September, 2019, recommended introduction of electronic
            invoice ('e-invoice') in a phased manner. Accordingly, below notifications were issued by the Government:
          </p>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Notification</th>
                    <th scope="col">Taxpayers with aggregate turnover<br><small>(in any preceding financial year since
                        2017-18)</small></th>
                    <th scope="col">e-invoicing applicable from</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      13/2020 – Central Tax Dt. 21-3-2020
                    </td>
                    <td>
                      500 Cr. and above
                    </td>
                    <td>
                      1<sup>st</sup> October, 2020
                    </td>
                  </tr>
                  <tr>
                    <td>88/2020 – Central Tax Dt. 10-11-2020</td>
                    <td>100 Cr. and above</td>
                    <td>1<sup>st</sup> January, 2021</td>
                  </tr>
                  <tr>
                    <td>05/2021 – Central Tax Dt. 8-3-2021</td>
                    <td>50 Cr. and above</td>
                    <td>1<sup>st</sup> April, 2021</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <br>
          <p>'e-invoicing’ is not generation of invoice by Government portal. Taxpayers will continue to create their
            GST invoices on their own Accounting/Billing/ERP Systems. These invoices will now be reported to 'Invoice
            Registration Portal (IRP)'. On reporting, IRP will generate a unique 'Invoice Reference Number (IRN)',
            digitally sign it and return the 'e-invoice'. A GST invoice will be valid only with a valid IRN. </p>
          <p>The documents presently covered by 'e-invoice' system are: Invoices, Credit Notes and Debit Notes, issued
            by notified taxpayers to registered persons (B2B) and for exports.</p>
        </div>
      </div>
    </div>
  </div>
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
</body>
</html>