var $j = jQuery.noConflict();
	$j(document).ready(function  ($) {
		
	$("#menuicon").on("click",function  () {
	     $('#megamenu').toggle();
	     //console.log('menu icon clicked ');
	     $(this).toggleClass('closer');
	  });
	var $image = $('#menuimage');
	var $imagedescription = $('#menudescription');
	var $submenu = $('.sub-menu>li');
	$submenu.on('hover',function  () {
		console.log($(this));
		var linkID = $(this).text();
		var description = $(this).children('a').attr('title');
		$imagedescription.text(description);
		$image.css("background-image", "url('http://melange.co.cc/wp-content/uploads/2012/10/" + linkID + "-150x150.jpg')");
	})
	//Only for the posts(Events)
	$.fn.setAllToMaxHeight = function(){
		return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
	}
	 $('#customfields .col').setAllToMaxHeight();
});
