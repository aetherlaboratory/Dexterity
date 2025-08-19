$(document).ready(function() {
  // Get the grid button element
  const gridBtn = $('.grid-btn');
  const invertBtn = $('.invert-btn');
  const horizontalBtn = $('.horizontal-btn');
  const vertBtn = $('.vertical-btn');

  // Get the grid overlays
  const gridOverlay = $('#grid-overlay');
  const horizontalOverlay = $('.horizontal');
  const invertedOverlay = $('.inverted');
  const verticalOverlay = $('.vertical');

  // Add an event listener to the grid button element
  gridBtn.on('click', function() {
    // Toggle the grid overlay class on or off
    gridOverlay.toggleClass('d-none');
    // Toggle the active class on or off
    $(this).toggleClass('active');
  });

  // Add an event listener to the horizontal button element
  horizontalBtn.on('click', function() {
    // Toggle the horizontal overlay class on or off
    horizontalOverlay.toggleClass('d-none');
    // Toggle the active class on or off
    $(this).toggleClass('active');
  });

  // Add an event listener to the invert button element
  invertBtn.on('click', function() {
    // Toggle the invert overlay class on or off
    invertedOverlay.toggleClass('d-none');
    // Toggle the active class on or off
    $(this).toggleClass('active');

    // Check if the vertical overlay is visible and hide it if it is
    if (!verticalOverlay.hasClass('d-none')) {
      verticalOverlay.toggleClass('d-none');
      vertBtn.toggleClass('active');
    }
  });

  // Add an event listener to the vertical button element
  vertBtn.on('click', function() {
    // Toggle the vertical overlay class on or off
    verticalOverlay.toggleClass('d-none');
    // Toggle the active class on or off
    $(this).toggleClass('active');
    
 if (!invertedOverlay.hasClass('d-none')) {
      invertedOverlay.toggleClass('d-none');
      invertBtn.toggleClass('active');
    }
  });
    });
