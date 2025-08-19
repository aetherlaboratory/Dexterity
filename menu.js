

document.addEventListener('DOMContentLoaded', function() {
  var tabs = new bootstrap.Tab(document.querySelector('#myTabs .nav-link.active'));
});



jQuery(document).ready(function($) {
  $('.menu-btn').on('click', function() {
      const $siteNavigation = $('.site-navigation');
      
      // Show .site-navigation
      $siteNavigation.removeClass('d-none').addClass('d-block');
      
      // Hide .menu-btn
      $(this).addClass('d-none').removeClass('d-block');
  });

  $('.close-btn').on('click', function() {
      const $siteNavigation = $('.site-navigation');
      
      // Hide .site-navigation
      $siteNavigation.removeClass('d-block').addClass('d-none');
      
      // Show .menu-btn
      $('.menu-btn').removeClass('d-none').addClass('d-block');
  });
});
