$(document).ready(function(){
    $(".cursor_style").click(function(){
        if($(this).next().hasClass("hide_service")) {
			$(this).next().removeClass("hide_service").addClass("display_service");
		}
		else{
			$(this).next().addClass("hide_service").removeClass("display_service");
		}
    });
});