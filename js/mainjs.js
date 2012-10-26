jQuery(document).ready(function($) {
  //For the Menu
  	
 //Sequence Slider
  var options = {

    autoPlay : true,
    autoPlayDelay : 10,
    animateStartingFrameIn: true,
    preloadTheseFrames: [1],
    nextButton : true,
    prevButton:true

  };
  var sequence = $("#maincta").sequence().data("sequence");
  console.log(sequence);
  /*$('.prev').on('click',function () {
  	sequence.prev();
  });
  $('.next').on('click',function () {
  	sequence.next();
  });*/

  //For Masonry
  var $container = $('#masonryrow');
$container.imagesLoaded( function(){
   
  $container.masonry({
    // options
    itemSelector : '.post',
    // options...
  isAnimated: true,
  animationOptions: {
    duration: 400,
    easing: 'linear',
    queue: false
  }
  
  });
});
});
  //For the Hover Effect
/*$(".events").hover(
	  function () {
	    $(this).addClass('eventhover');
	  },
	  function () {
	    $(this).removeClass('eventhover');
	  }
);
});*/
