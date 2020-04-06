$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 50){
		 
		 $("#banner").addClass("shrink");
		 $("#banner").removeClass("blackheader");
		}
		else
		{
		   $("#banner").addClass("blackheader");
		   $("#banner").removeClass("shrink");
		}
	});
// backtotop
$(document).ready(function(){

$(window).scroll(function(){
if($(this).scrollTop() > 40){
	$('#topbtn').fadeIn();
} else{
	$('#topbtn').fadeOut();
}

});
	
	$("#topbtn").click(function(){
	$('html,body').animate({scrollTop : 0}, 'slow');	
	});



});

// backtotop