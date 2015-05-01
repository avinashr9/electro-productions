$(document).ready(function(){
    $(".cursor_style").click(function(){
		$(this).next().slideToggle("slow");
		/*if ($(window).width() <= 800){	
		  if(this.document
		}
		else {
		}*/
    });
	
	/* video pause */
	$("#video1").click( function(){
	  
       $(this).get(0).paused ? $(this).get(0).play() : $(this).get(0).pause();
	});
	
	/* fancybox video*/
	$('.fancybox').fancybox();

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
	
});

 