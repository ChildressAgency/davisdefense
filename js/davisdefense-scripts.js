jQuery(document).ready(function($){

  if(typeof $.fn.fullpage == 'function'){
  	$('#hp-main').fullpage({
			responsiveWidth:768,
      responsiveHeight:600,
      slideSelector:'.fullpage-slide',
      //paddingTop:'50px',
      //paddingBottom:'50px',
      verticalCentered: false,
      'onLeave': function(index, nextIndex, direction){
        $('.cap-link>span').addClass('animated bounce');
        $('.section1-img').addClass('animated slideInRight');
        if(index == 2){
          $('.client-logos ul').addClass('animated bounce');
          $('.section2-img').addClass('animated slideInUp');
        }
        if(index == 3){
          $('.teaming-vehicles').addClass('animated slideInUp');
          $('.teaming-vehicles .row').addClass('animated bounce');
        }
        if(index == 4){
          $('.blog-post-summary').addClass('animated slideInLeft');
        }
      },
    });
  }

  new WOW().init();

  $('.cap-link').on('click', function(e){
    e.preventDefault;
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }    
  });    
});