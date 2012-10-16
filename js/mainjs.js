jQuery(document).ready(function ($) {
  //For the Menu
  $("#menuicon").on("click",function  () {
     $('#megamenu').toggle();
  });
 //Sequence Slider
  var options = {

    autoPlay : true,
    autoPlayDelay : 300,
    transitionThreshold : 200

  }
  var sequence = $("#maincta").sequence().data("sequence");
  console.log(sequence);
});