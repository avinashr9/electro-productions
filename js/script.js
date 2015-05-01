$(document).ready(function(){
    $(".cursor_style").click(function(){
		$(this).next().slideToggle("slow");
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

    /* Jquery page scroll*/	
	$('#nav').onePageNav({
      currentClass: 'current',
      changeHash: false,
      scrollSpeed: 750,
      scrollThreshold: 0.5,
      filter: '',
      easing: 'swing',
      begin: function() {
        //I get fired when the animation is starting
      },
      end: function() {
        //I get fired when the animation is ending
      },
      scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
      }
    });

}); 