jQuery(document).ready(function ($) {
  //For the Menu
  
 //Sequence Slider
  var options = {

    autoPlay : true,
    autoPlayDelay : 100,
    animateStartingFrameIn: true,
    preloadTheseFrames: [1]

  }
  var sequence = $("#maincta").sequence().data("sequence");
  console.log(sequence);
});