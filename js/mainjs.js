jQuery(document).ready(function ($) {
  //For the Menu
        $('#menuicon ,#megamenu').on('mouseenter',function  () {
            $('#megamenu').css('height','144px');
            //$(this).hide();
        });
        $('#thegraphic').on('hover',function  () {
          $('#megamenu').css('height','3px');
        })
        var graphDraw = {

          defaultLabelColor: '#fff',
          defaultLabelSize: 14,
          labelThreshold: 10000,
          defaultLabelHoverColor: '#000',
          defaultEdgeType: 'curve'

        }
        s1 = sigma.init(document.getElementById('thegraphic')).configProperties({
          drawHoverNodes: true
        }).drawingProperties(graphDraw).mouseProperties({
          mouseEnabled: false
          //maxRatio: 3
        }).graphProperties({
          //scalingMode: 'outside',
          minNodeSize: 0.5,
          maxNodeSize: 5,
          minEdgeSize: 1,
          maxEdgeSize: 2
        });
        var arraynames = ['thoughts','passion','revolution']
        var i, N = 100, E = 150;
        var colorFrom = {
              r: 255,
              g: 193,
              b: 84
        };

        var colorTo = {
              r: 252,
              g: 166,
              b: 14
         };
        for(i=0;i<N;i++){
          s1.addNode(i,{
            'x': randomXToY(10,950,2) ,
            'y': randomXToY(20,450,2),
            'size': 0.5+5*Math.random(),
            'color': getRandomColor(colorFrom,colorTo),
            'label': arraynames[Math.floor(Math.random() * arraynames.length)]
          });
        }

        for(i=0;i<E;i++){
          s1.addEdge(i,Math.random()*N|0,Math.random()*N|0);
        }
        s1.activateFishEye().draw();
        //s1.draw();

/*    var newParent = document.getElementById('mouselayer-sigma-1');
    var mouseLayer = document.getElementById('sigma_mouse_1');
    
    newParent.appendChild(mouseLayer);

    mouseLayer.addEventListener('mouseover', function() {
      s1.activateFishEye();
    }, true);
    mouseLayer.addEventListener('mouseout', function() {
      s1.desactivateFishEye().draw(2,2,2);
    }, true);*/
});
//For the interactive Graphic
function getRandomColor(a, b) {
      var r = Math.random();
     
      return 'rgb('+
             ((a.r+(b.r-a.r)*r)|0).toString() +
             ','+
             ((a.g+(b.g-a.g)*r)|0).toString() +
             ','+
             ((a.b+(b.b-a.b)*r)|0).toString() +
             ')';
};
function randomXToY(minVal,maxVal,floatVal)
{
  var randVal = minVal+(Math.random()*(maxVal-minVal));
  return typeof floatVal=='undefined'?Math.round(randVal):randVal.toFixed(floatVal);
}