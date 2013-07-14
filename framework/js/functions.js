/* ------------------------------------------------------------------------ */
/* Javascripts
/* ------------------------------------------------------------------------ */

jQuery(document).ready(function($){
    
     // Clear Input Fields value
	 $('input[type=text]').each(function() {
		var default_value = this.value;
		$(this).focus(function(){
		   if(this.value == default_value) {
		           this.value = '';
		   }
		});
		$(this).blur(function(){
		       if(this.value == '') {
		               this.value = default_value;
		       }
		});
	});
	
	/* ------------------------------------------------------------------------ */
	/* Image Hovers */
	/* ------------------------------------------------------------------------ */

	$(".post-image a, .post-gallery a, #portfolio-slider li a").hover(function(){
		$(this).has('img').append('<div class="overlay"></div>');
		$(this).find('.overlay').animate({opacity : '1'}, 300);
	}, function(){
		$(this).find('.overlay').animate({opacity : '0'}, 300 ,function(){ 
			$(this).remove(); 
		});
	});

	$('.member').hover(function() {
		$(this).find('.member-social').stop().animate({'opacity' : 1}, 300);
		$(this).find('.member-social ul').stop().animate({'marginTop':'-15px'}, 160, 'easeOutSine');
	}, function(){
		$(this).find('.member-social').stop().animate({'opacity' : 0}, 200);
		$(this).find('.member-social ul').stop().animate({'marginTop':'-45px'}, 260, 'easeOutSine');
	});

	$('.portfolio-page-item').hover(function() {
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 1}, 300);
		$(this).find('.overlay-link, .overlay-lightbox, .overlay-lightbox-img').stop().animate({'top' : $(this).height()/2 - 32, 'marginTop':'-20px', 'opacity' : 1}, 160, 'easeOutSine');
		$(this).find('.portfolio-title').stop().animate({'bottom' : 0}, 200);
	}, function(){
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 0}, 200);
		$(this).find('.overlay-link, .overlay-lightbox, .overlay-lightbox-img').stop().animate({'top' : -25, 'opacity' : 0}, 260, 'easeOutSine');
		$(this).find('.portfolio-title').stop().animate({'bottom' : '-65px'}, 200);
	});

	$('.hexagon .portfolio-page-item').hover(function() {
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 1}, 300);
		$(this).find('.overlay-link, .overlay-lightbox, .overlay-lightbox-img').stop().animate({'top' : $(this).height()/2, 'marginTop':'-20px', 'opacity' : 1}, 160, 'easeOutSine');
		$(this).find('.portfolio-title').stop().animate({'bottom' : 0}, 200);
	}, function(){
		$(this).find('.portfolio-overlay').stop().animate({'opacity' : 0}, 200);
		$(this).find('.overlay-link, .overlay-lightbox, .overlay-lightbox-img').stop().animate({'top' : -25, 'opacity' : 0}, 260, 'easeOutSine');
		$(this).find('.portfolio-title').stop().animate({'bottom' : '-65px'}, 200);
	});

	$('.blog-item').hover(function() {
		$(this).find('.blog-overlay').stop().animate({'opacity' : 1}, 200, 'easeOutSine');
		$(this).find('.post-icon').stop().animate({'top' : 50, 'opacity' : 1}, 160, 'easeOutSine');
	}, function(){
		$(this).find('.blog-overlay').stop().animate({'opacity' : 0}, 300, 'easeInSine');
		$(this).find('.post-icon').stop().animate({'top' : -25, 'opacity' : 0}, 260, 'easeOutSine');
	});
	
	/* ------------------------------------------------------------------------ */
	/* Back To Top */
	/* ------------------------------------------------------------------------ */

	$(window).scroll(function(){
		if($(window).scrollTop() > 200){
			$("#back-to-top").fadeIn(200);
		} else{
			$("#back-to-top").fadeOut(200);
		}
	});
	
	$('#back-to-top, .back-to-top').click(function() {
		  $('html, body').animate({ scrollTop:0 }, '800');
		  return false;
	});
	
	/* ------------------------------------------------------------------------ */
});
/* ------------------------------------------------------------------------ */
/* EOF
/* ------------------------------------------------------------------------ */