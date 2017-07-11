jQuery(document).ready(function($){

  if(typeof $.fn.fullpage == 'function'){
  	$('#hp-main').fullpage({
			responsiveWidth: 768,
      responsiveHeight:600,
      verticalCentered: false,
      'onLeave': function(index, nextIndex, direction){
        $('.cap-link>span').addClass('animated bounce');
        $('.section1-img').addClass('animated slideInRight');
      },
    });
  }

  new WOW().init();
});