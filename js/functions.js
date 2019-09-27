
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


