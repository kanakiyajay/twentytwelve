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
	});
	//For Storing the Last Visited
	var theUrl = 'http://melange2012.co.cc/';
	if (theUrl===window.location.href.toString()) {
		console.log('It is the Home page');
		var lastVisit = localStorage.getItem("lastVisited");
		var lastTitle = localStorage.getItem("lastTitle");
		if (lastVisit!=='' && lastVisit !==null) {
			//Show the last Visited URL
			$('body').append('<div style="position:fixed;top:10%;left:0;background-color:black;padding:0.5%"><a style="color:white" href="'+lastVisit+'">Last Visited :'+lastTitle+'</a></div>')
		};
	}
	else{
		//Store The last visited page
		console.log('not the home page');
		var thisVisit = window.location.href;
		var theTitle = $('.entry-title').text();
		localStorage.setItem("lastVisited",thisVisit);
		localStorage.setItem("lastTitle",theTitle);
	}
	//Only for the posts(Events)
	$.fn.setAllToMaxHeight = function(){
		return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
	}
	 $('#customfields .col').setAllToMaxHeight();
});
