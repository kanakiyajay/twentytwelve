jQuery(document).ready(function($) {
  //For the Menu
  	
 //Sequence Slider
  var options = {

    autoPlay : true,
    autoPlayDelay : 100,
    animateStartingFrameIn: true,
    preloadTheseFrames: [1],
    nextButton : true,
    prevButton:true

  };
  var sequence = $("#maincta").sequence().data("sequence");
  console.log(sequence);
  $('.prev').on('click',function () {
  	sequence.prev();
  });
  $('.next').on('click',function () {
  	sequence.next();
  });

  //For Masonry
  var $container = $('#masonryrow');
  	$container.imagesLoaded(function(){
	  $container.masonry({
	    itemSelector : '.events',
	    columnWidth : 240
	  });
  	});
  //For the Hover Effect
$(".events").hover(
	  function () {
	    $(this).addClass('eventhover');
	  },
	  function () {
	    $(this).removeClass('eventhover');
	  }
);
});
