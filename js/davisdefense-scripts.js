jQuery(document).ready(function($){

  if(typeof $.fn.fullpage == 'function'){
  	$('#hp-main').fullpage({
			responsiveWidth: 768,
      verticalCentered: false
    });
  }

  new WOW().init();
});