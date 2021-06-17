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
          <h2>Hyperlink Policy</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>At many places in this website, you shall find links to other websites/portals.
            These links have been placed for your convenience. By creating a link to a third
            party web site, GSTN shall not liable for any failure of products or services
            offered or advertised at those sites. When you select a link to an outside
            website, you shall be leaving the e- invoice website and shall be subject to the
            privacy and security policies of the owners/sponsors of the outside website(s).</p>
          <p>Prior permission is required before hyperlinks are directed from any
            website/portal to this website. Permission for the same, stating the nature of the
            content on the pages from where the link has to be given and the exact
            language of the Hyperlink should be obtained by sending a request to GSTN.</p>
        </div>
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