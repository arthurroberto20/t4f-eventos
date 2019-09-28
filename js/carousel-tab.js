 $(document).ready(function () {

      $(".owl-carousel").owlCarousel({
        items: 4,
        loop: true,
        loop: false,
        margin: 10,
        autoplay: true,
        dots: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
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