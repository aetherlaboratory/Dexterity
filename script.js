$(document).ready(function() {
    // show the button when the user scrolls down 20px from the top of the document
    $(window).scroll(function() {
      if ($(this).scrollTop() > 20) {
        $('#scroll-to-top').fadeIn();
      } else {
        $('#scroll-to-top').fadeOut();
      }
    });
  
    // scroll to top when the user clicks the button
    $('#scroll-to-top').click(function() {
      $('html, body').animate({scrollTop : 0},100);
      return false;
    });
  });
  
  
  

jQuery(document).ready(function($) {
  var previousScroll = 0;
  var headerHeight = $('.header-nav-bar').outerHeight();

  jQuery(window).scroll(function() {
    var currentScroll = jQuery(this).scrollTop();

    if (currentScroll > previousScroll && currentScroll > headerHeight + 100) {
      $('.header-nav-bar').fadeOut();
    } else if (currentScroll < previousScroll && currentScroll > headerHeight + 150) {
      $('.header-nav-bar').fadeIn();
    }

    previousScroll = currentScroll;
  });
});




