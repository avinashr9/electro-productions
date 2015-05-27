$(document).ready(function(){
    $(".cursor_style").click(function(){
		$(this).next().slideToggle("slow");
    });

    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
      } else {
        $('nav').removeClass('shrink');
      }
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

    /*$( "#submitBtn" ).click(function() {
		 $('#submitModal').modal('show');
     });*/

    /*Name field validation*/
	$('#name').blur(function() {
		var name = $(this).val();
		var charReg = new RegExp('^([a-zA-Z ]{3,25})$');
		if(!charReg.test(name)) {
			$('#name_validate').removeClass('hide_service');
			$("#submitBtn").prop("disabled",true);
		}
		else {
			$('#name_validate').addClass('hide_service');
			if($('#name_validate').hasClass('hide_service') &&
			     $('#email_validate').hasClass('hide_service') &&
				   $('#phne_validate').hasClass('hide_service')) {
			$("#submitBtn").prop("disabled",false);
			}
		}
	});

    /*Email field validation*/
	$('#email').blur(function() {
		var email1 = $(this).val();
		var charReg = new RegExp('^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$');
		if(!charReg.test(email1) || email1.length == 0) {
			$('#email_validate').removeClass('hide_service');
			$("#submitBtn").prop("disabled",true);
		}
		else {
			$('#email_validate').addClass('hide_service');
			if($('#name_validate').hasClass('hide_service') &&
			     $('#email_validate').hasClass('hide_service') &&
				   $('#phne_validate').hasClass('hide_service')) {
			$("#submitBtn").prop("disabled",false);
			}
		}
	});

    /*Phone field validation*/
	$('#phone').blur(function() {
		var phone = $(this).val();
		var charReg = new RegExp('[0-9-()+]{3,20}');
		if(!charReg.test(phone) || phone.length == 0) {
			$('#phne_validate').removeClass('hide_service');
			$("#submitBtn").prop("disabled",true);
		}
		else {
			$('#phne_validate').addClass('hide_service');
			if($('#name_validate').hasClass('hide_service') &&
			     $('#email_validate').hasClass('hide_service') &&
				   $('#phne_validate').hasClass('hide_service')) {
			$("#submitBtn").prop("disabled",false);
			}
		}
	});
}); 