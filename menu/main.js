
if (jQuery) {
  (function ($) {
    "use strict";
    $(document).ready(function () {
      // initialize the megamenu
      $('.megamenu').accessibleMegaMenu();

      // hack so that the megamenu doesn't show flash of css animation after the page loads.
      setTimeout(function () {
        $('body').removeClass('init');
        $('.no-subMenu').removeClass('accessible-megamenu-top-nav-item');

      }, 500);
    
      $(".site-branding ").addClass("notranslate");
    });

  }(jQuery));
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("dropdown-field");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    $('.dropdown-field').show();
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
      $('.dropdown-field').hide();
    } else {
      a[i].style.display = "none";

    }
  }
}




// click popup report//

function emptyData() {
  var form = document.getElementById("myFormReport");
  var x;
  x = $('.report_modal textarea').val();
  if (x != "") {
    $('.errorMsg').addClass('hidden');
    form.reset();
  }

  else {
    $('.errorMsg').removeClass('hidden');
    return false;
  }

  //$('#exampleModalThsnks').dialog('open');


}

function emptyDataClose() {
  var form = document.getElementById("myFormReport");
  var x;
  x = $('.report_modal textarea').val();
  if (x != "") {
    $('.errorMsg').addClass('hidden');
    form.reset();
  }

  else {
    $('.errorMsg').removeClass('hidden');
    return false;
  }
  // location.reload(true);
}


