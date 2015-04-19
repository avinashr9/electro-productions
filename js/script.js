$(document).ready(function(){
    $(".cursor_style").click(function(){
		$(this).next().slideToggle("slow");
    });
});