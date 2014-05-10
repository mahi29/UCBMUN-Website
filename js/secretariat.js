$(document).ready(function() {
	$.fn.hoverClass = function(){
	    return this.hover(function(){
	 		var base = ($(this).attr('id')).slice(0,-5);
			var title = "#"+base+"Title";
			$(title).css("display","block");
	    }, function(){
	    	var base = ($(this).attr('id')).slice(0,-5);
	    	var title = "#"+base+"Title";
			$(title).css("display","none");
	    });
	}

	$("#sgImage").hoverClass();
	$("#sgTitle").hoverClass();

	$("#dsgImage").hoverClass();
	$("#dsgTitle").hoverClass();

	$("#coseImage").hoverClass();
	$("#coseTitle").hoverClass();

	$("#cosiImage").hoverClass();
	$("#cosiTitle").hoverClass();

	$("#usgcrisisImage").hoverClass();
	$("#usgcrisisTitle").hoverClass();

	$("#usgjccImage").hoverClass();
	$("#usgjccTitle").hoverClass();

	$("#usgsbImage").hoverClass();
	$("#usgsbTitle").hoverClass();

	$("#usgddImage").hoverClass();
	$("#usgddTitle").hoverClass();

	$("#dbrfImage").hoverClass();
	$("#dbrfTitle").hoverClass();

	$("#dbrsImage").hoverClass();
	$("#dbrsTitle").hoverClass();

	$("#dopImage").hoverClass();
	$("#dopTitle").hoverClass();

	$("#dobImage").hoverClass();
	$("#dobTitle").hoverClass();

	$("#domImage").hoverClass();
	$("#domTitle").hoverClass();

	$("#dotImage").hoverClass();
	$("#dotTitle").hoverClass();

	$("#adotImage").hoverClass();
	$("#adotTitle").hoverClass();
});
