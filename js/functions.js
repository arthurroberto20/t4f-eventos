
// PAGINA HOME

$(document).ready(function() {
$('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            dots: true
          },
          600: {
            items: 1,
            dots: true
          },
          1000: {
            items: 3,
            dots: true,
            loop: false
          }
        }
      })
    });


// PAGINA CONTATO

(function () {
    'use strict';
    window.addEventListener('load', function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


// PAGINA DAS CASAS - ANCHORS NAV

// ataredo.com/morphology/lucidscroll - documentation


$(function() {

  var gate = $(window),
  elicit = $('.nav-anchors a'),
  items = $('section'),
  mid, intent;
  
  // keeping track of mousewheel direction
  
  gate.on('wheel', function(e) {
  
    intent = e.originalEvent.deltaY;
  })
  
  // highlight the item currently in view by adding classes
  
  .resize(function() {
  
    mid = gate.height()/2;
  })
  .resize().scroll(function() {
  
    items.each(function() {
  
      var edges = this.getBoundingClientRect(),
      apex = edges.top, nadir = edges.bottom;
  
      if (apex < mid && nadir > mid) $(this).addClass('active');
      else $(this).removeClass('active');
  
      var busy = $('.active');
  
      if (!busy[0]) return;
  
      $('.vivid').removeClass('vivid');
      $('[href="#' + busy[0].id + '"]').addClass('vivid');
    });
  })
  
  // this is where the magic happens
  
  .scroll().impulse({
  
    range: findMark,
    delay: true
  });
  
  // calculate the position of the page section
  
  function findMark() {
  
    if (intent > 0) var aim = $('.active').next('section');
    else aim = $('.active').prev('section');
    if (!aim.length) return 0;
  
    return Math.abs(aim.offset().top-gate.scrollTop());
  }
  
  // using the plugin to animate anchor links
  
  elicit.click(function() {
  
    var plan = $(this.hash).offset().top-gate.scrollTop(),
    jump = 0.7*Math.abs(plan); // creates constant speed
  
    gate.demit().evoke({range: plan, tempo: jump});
  
    return false;
  });
  });
 