 $(document).ready(function () {
     
      $("#owl-example").owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
      
        dots: true,       
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            dots: true,
            loop: false
          },
          600: {
            items: 3,
            dots: true,
            loop: false
          },
          1000: {
            items: 4,
            dots: true,
            loop: false
          }
        }


      });
      $("#owl-fornecedores").owlCarousel({
        items: 6,
        loop: false,
        margin: 10,
      
        dots: true,       
        responsiveClass: true,
        responsive: {
          0: {
            items: 3,
            dots: true,
            loop: false,
          },
          600: {
            items: 3,
            dots: true,
            loop: false,
          },
          1200: {
            items: 6,
            dots: true,
            loop: false,
          },
          1920: {
            items: 8,
            dots: true,
            loop: false,
          }
        }


      });
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
        $(".owl-carousel").trigger('refresh.owl.carousel');
      });
    
     
    
    });
$(document).ready(function () {
     
      $(".owl-carousel").owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
      
        dots: true,       
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            dots: true,
            loop: false
          },
          600: {
            items: 3,
            dots: true,
            loop: false
          },
          1000: {
            items: 4,
            dots: true,
            loop: false
          }
        }


      });
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
        $(".owl-carousel").trigger('refresh.owl.carousel');
      });
    
     
    
    });