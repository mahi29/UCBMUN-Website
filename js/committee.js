$(document).ready(function() {
	$.fn.hoverClass = function(){
	    return this.hover(function(){
			$(this).css("opacity",".65");
	    }, function(){
			$(this).css("opacity","1");
	    });
	}

	$("#image0").hoverClass();
	$("#image1").hoverClass();
	$("#image0").hoverClass();
	$("#image1").hoverClass();
	$("#image2").hoverClass();
	$("#image3").hoverClass();
	$("#image4").hoverClass();
	$("#image5").hoverClass();
	$("#image6").hoverClass();
	$("#image7").hoverClass();
	$("#image8").hoverClass();
	$("#image9").hoverClass();
	$("#image10").hoverClass();
	$("#image11").hoverClass();
	$("#image12").hoverClass();
});