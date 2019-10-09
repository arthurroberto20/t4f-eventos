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


    var hidWidth;
var scrollBarWidths = 20;

var widthOfList = function(){
  var itemsWidth = 10;
  $('.list li').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
  return $('.list').position().left;
};

var reAdjust = function(){
  if (($('.wrapper').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
  else {
    $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
  	$('.scroller-left').hide();
  }
}

reAdjust();

$(window).on('resize',function(e){  
  	reAdjust();
});

$('.scroller-right').click(function() {
  
  $('.scroller-left').fadeIn('slow');
  $('.scroller-right').fadeOut('slow');
  
  $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

  });
});

$('.scroller-left').click(function() {
  
	$('.scroller-right').fadeIn('slow');
	$('.scroller-left').fadeOut('slow');
  
  	$('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
  	
  	});
});    
  
    
      
        
  