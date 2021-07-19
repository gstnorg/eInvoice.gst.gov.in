 <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="footer-links">
            <h4>About e-Invoice</h4>
            <ul>
              <li><a target="_blank" href="./downloads/english-version-1.2-Dt-30-3-2021.pdf">e-invoice – At a Glance
                </a></li>
              <li><a target="_blank" href="./downloads/GST e-invoice System - Detailed Overview.pdf">e-invoice –
                  Detailed Overview</a></li>
              <li><a target="_blank"
                  href="./downloads/GST e-invoice System - FAQs - Version 1.4 Dt. 30-3-2021.pdf">e-invoice - FAQs</a>
              </li>
            </ul>
          </div>
          <div class="footer-links">
            <h4>e-Invoice Portals</h4>
            <ul>
              <li><a target="_blank" href="https://einvoice1.gst.gov.in/">IRP-1 (NIC)
                </a></li>
              <li><a target="_blank" href="https://einvoice1-trial.nic.in/">Trial/Testing Portal-1 (NIC)</a></li>
              <li><a href="https://einv-apisandbox.nic.in/">API/Sandbox-1 (NIC)</a></li>
            </ul>
          </div>
          <div class="footer-links">
            <h4>Related Sites</h4>
            <ul>
              <li><a target="_blank" href="https://www.cbic.gov.in/" class="inline">Central Board of Indirect Taxes &
                  Customs (CBIC)</a></li>
              <li><a target="_blank" href="http://www.gstcouncil.gov.in/state-government-gst-website">State GST Websites
                </a></li>
              <li><a target="_blank" href="https://ewaybill.nic.in/">E-way Bill Portal</a></li>
              <li><a target="_blank" href="https://gstn.org.in/">GSTN</a></li>
            </ul>
          </div>
          <div class="footer-links pr-0">
            <h4>Website Policies</h4>
            <ul>
              <li><a href="website-policy.php">Website Policy </a></li>
              <li><a href="hyperlink-policy.php">Hyperlink Policy </a></li>
              <li><a href="disclaimer.php">Disclaimer </a></li>
            </ul>
          </div>
          <div class="footer-links pl-0 pr-0">
            <h4>Contact Us</h4>
            <ul>
              <li><span>e-invoice Helpline 1800-103-4786</span></li>
              <li><a target="_blank" href="https://selfservice.gstsystem.in/">Log your grievance</a></li>
              <li>
                <a target="_blank" href="#" data-toggle="modal" data-target="#exampleModal">Report an issue on this
                  page</a>
              </li>
              <li><span><strong>Follow us:</strong> </span></li>
              <li class="social">
                <a target="_blank" href="https://www.facebook.com/Goods-and-Services-Tax-1674179706229522/?fref=ts"
                  class="fa fa-facebook"><span class="hiddenLink">Facebook link</span></a>
                <a target="_blank" href="https://twitter.com/Infosys_GSTN" class="fa fa-twitter">
                <span class="hiddenLink">Twitter link</span></a>
                <a target="_blank" href="https://www.linkedin.com/company/gstn-official/about/?viewAsMember=true"
                  class="fa fa-linkedin"><span class="hiddenLink">linkedin link</span></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCFYpOk92qurlO5t-Z_y-bOQ"
                  class="fa fa-youtube-play"><span class="hiddenLink">youtube link</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">&copy;
            2021-2022 e-Invoice
          </div>
          <div class="col-lg-6 col-md-6 text-right">
            Designed & Developed by GSTN
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="modal fade report_modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Report an Issue</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="myFormReporteThsnks" style="display:none;">
            <div class="form-group">
             <h2 class="myFormReportsent">Thank you for your feedback!</h2>
            </div>
          
          </form>
          <form id="myFormReport" name="myFormReport">
            <div class="form-group">
              <label for="sel1">Please select an issue:</label>
              <select class="form-control" id="sellist1" name="sellist1">
                <option value="A link, video or button is not working">A link, video or button is not working</option>
                <option value="There is a spelling mistake">There is a spelling mistake </option>
                <option value="Information is missing">Information is missing </option>
                <option value="Information is outdated or wrong">Information is outdated or wrong</option>
                <option value="Other issue not in this list">Other issue not in this list</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="feedFormControlTextarea1" name="feedFormControlTextarea1" rows="3" placeholder="Description"></textarea>
			        <span class="errorMsg hidden">This field is required</span>
            </div>
            <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
            </div>
            <div class="form-group row"> 
            <div class="col-md-2"><span id="captcha"></span></div>
            <div class="col-md-5"><input type="text" placeholder="Type Captcha here" id="cpatchaTextBox"/></div>
            <div class="col-md-5"><span id="captchaInvalid">Invalid Captcha</span></div>
    
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="closepopup" onclick="return emptyDataClose()" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <button id="submitData" onclick="return sendEmail();" class="btn report_btn btn-primary btn-warning">
            Report an Issue
          </button>
        </div>
      </div>
    </div>
  </div>

  <script src="./script/jquery.min.js"></script>
  <script src="./script/bootstrap.min.js"></script>
  <script src="./script/vtricker.js"></script>
  <script src="./script/jquery.jConveyorTicker.min.js"></script>
  <script src="./script/jquery.newsTicker.js"></script>
  <script src="./menu/jquery-accessibleMegaMenu.js"></script>
  <script src="./menu/main.js"></script>
  <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LefIDsbAAAAACCozqOInw-aXRK1jsoVgd8blcKb"></script> -->

  <script>
var code;
function createCaptcha() {
  //clear the contents of captcha div first 
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
  "0123456789&";
  var lengthOtp = 4;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 70;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "24px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element

}
function validateCaptcha() {

  if (document.getElementById("cpatchaTextBox").value == code) {
    $('#captchaInvalid').hide();
  }else{
    $('#captchaInvalid').show();
    return;
  }
}



  function sendEmail(){
    if (document.getElementById("cpatchaTextBox").value == code) {
    $('#captchaInvalid').hide();
  }else{
    $('#captchaInvalid').show();
    return;
  }
    var subject = $("#sellist1").val();
  var message = $("#feedFormControlTextarea1").val();
    if(message == "" ){
  $('.errorMsg').removeClass('hidden');
  return;
 }
 else{
  $('.errorMsg').addClass('hidden');
  $('#myFormReport').hide();
  $('#myFormReporteThsnks').show();
  $("#submitData").hide();
  $(".myFormReportsent").html('<div style="text-align: center;"> <img src="./../images/CLoading.gif"/></div><br>');
  
  
 
  //if(isNotEmpty(subject) && isNotEmpty(message)){
    $.ajax({
      url: "sendMail.php",
      method: "POST",
      datatype: "json",
      data:{
        subject: subject,
        message: message
      },
      success: function(response){
        $("#myFormReport")[0].reset();
        //alert(response)
        $(".myFormReportsent").text("Thank you for your feedback!");
      }
    })
 }

 createCaptcha();
}


$(function () {
  createCaptcha();
  $('#captchaInvalid').hide();

  //  location.reload(true);
  $("#closepopup").click(function () {
    $('#myFormReport').show();
    $('#myFormReporteThsnks').hide();
    $("#submitData").show();
    //$("#exampleModal").modal('hide');
    //  location.reload(true);
  });
});
  </script>