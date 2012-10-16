var $j = jQuery.noConflict();
$j(document).ready(function  ($) {
	
$("#menuicon").on("click",function  () {
     $('#megamenu').toggle();
     console.log('menu icon clicked ');
  });
});