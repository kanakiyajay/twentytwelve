jQuery(document).ready(function ($) {
  //For the Menu
  $("#menuicon").on("click",function  () {
     $('#megamenu').toggle();
  });
 //Sequence Slider
  var options = {

    autoPlay : true,
    autoPlayDelay : 300,
    transitionThreshold : 250,
    animateStartingFrameIn: true,
    preloadTheseFrames: [1],
    preloadTheseImages: [
          "../images/placeholder.png"
        ]

  }
  var sequence = $("#maincta").sequence().data("sequence");
  console.log(sequence);
});