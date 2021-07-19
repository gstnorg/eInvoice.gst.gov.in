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
  
  <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="./style/small-devices.css" />
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
  <div class="upcoming_container_main">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-tittle mb-3 pt-3">
          <h2>Disclaimer</h2>
		 
       </div>
	   </div>
<div class="row">
<div class="col-md-12">
<p>This website is developed and maintained by Goods and Service Tax Network
  (GSTN). GSTN is a special purpose vehicle (SPV) formed by Ministry of Finance
  to provide common IT infrastructure, systems and services to the Central and
  State Governments, tax payers and other stakeholders for supporting
  implementation and administration of the GST in India.</p>
<p>Though all efforts have been made to ensure the accuracy and currency of the
  content on this website, the same should not be construed as a statement of law
  or used for any legal purposes or otherwise. GSTN hereby expressly disowns and
  repudiates any claims or liabilities (including but not limited to any third party
  claim or liability, of any nature, whatsoever) in relation to the accuracy,
  completeness, usefulness and real-time of any information and contents
  available at this website, and against any intended purposes (of any kind
  whatsoever) by use thereof, by the user/s (whether used by user/s directly or
  indirectly). Users are advised to verify/check any information and contents, with
  the relevant Government department(s) and/or other source(s) and to obtain
  any appropriate professional advice, before acting thereon as may be provided,
  from time to time, in the website.</p>
<p>GSTN makes no representations or warranty whatsoever about any other web
  site which you may access through this one. When you access any other site,
  please understand that it is independent from GSTN, and that GSTN has no
  control over the content on that web site. In addition, a link to any other web
  site does not mean that GSTN endorses or accepts any responsibility for the
  content, or use, of such web site. It is up to you to take precautions to ensure
  that whatever you select for your use is free of such items as viruses, worms
  and other items of destructive nature. GSTN hereby expressly disclaims liability
  and claims against, any information, materials, products or services posted or
  offered at any of the third party sites linked to this Web Site including Central
  and State Governments.</p>
<p>This web site will be governed by and construed in accordance with the laws in
  India, applicable therein, without regard to the principles of conflicts of all the
  applicable laws.</p>
<p>GSTN exclusively reserves the rights, to change or modify or alter any of the
  policies available on this website (whether completely or partially), from time to
  time, at its discretion, without any objections, interruptions, grounds, claims or
  liabilities of any third party/users.</p>
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