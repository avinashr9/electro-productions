$(document).ready(function(){
    $(".cursor_style").click(function(){
		$(this).next().slideToggle("slow");
		/*if ($(window).width() <= 800){	
		  if(this.document
		}
		else {
		}*/
    });
});