var $j = jQuery.noConflict();
	$j(document).ready(function  ($) {
		
	$("#menuicon").on("click",function  () {
	     $('#megamenu').toggle();
	     //console.log('menu icon clicked ');
	     $(this).toggleClass('closer');
	  });
	$.fn.setAllToMaxHeight = function(){
		return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
	}
	 $('#customfields .col').setAllToMaxHeight();
});
