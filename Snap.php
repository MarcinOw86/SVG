<?php
    		include 'cookie.php';
			
?>




                                

<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Marcin Owsianka.com </title>
        
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
        
     	<script src="js/modernizr-2.7.2.min.js"></script>
     	<script type="text/javascript" charset="iso-8859-2" src="js/indeks.js"></script>
        
        <script src="js/raphael.js"></script>
        <script src="js/snap.svg.js"></script>

    </head>
    <body>
<?php
   		
    		include 'naglowek.php';
			include 'nawigacja.php';
			
?>
<!--<script type="text/javascript" charset="iso-8859-2" src="js/indeks_hasla.js"></script> -->
 
<div id="wrapper_main">

    <div id="paper_svg">

    <svg id="svgout" viewBox="0 0 960 600">

    </svg>
</div>
		<section id="main">


    		<section class="video">
<h1>Strona w budowie</h1>
<!--
<object data="brick.svg" type="image/svg+xml" width="300" height="300">
BRAK OBSŁUGI SVG
</object>
-->



<script>


 window.onload = function () {

    var s = Snap("#svgout"); // This will use an existing svg element (not a div)
/*
    var r = s.rect(0,0,100,100);
    var c = s.circle(100,100,50);

    r.attr('fill', 'red');     //This is the elements area to fill

    c.attr({ 'fill': 'blue', 'stroke': 'black', 'strokeWidth': 10 });

    r.attr({ stroke: '#123456', 'strokeWidth': 20 }); //Or this does the same thing passing one object

    c.click( function() { this.attr('fill', 'green') } );   // using 'this'
    r.click( function() { r.attr('fill', 'yellow') } );     

    s.text(200,100, 'Click An Object').attr({'fill' : 'blue',  'stroke': 'blue', 'stroke-width': 0.2 });
*/

   

        Snap.load("stick1.svg", function(f) {

            cos = f.select("#tulow");
            cos.attr({fill:"red"});
            cos.animate({fill:"blue"},1000);


            cos.click(function(){this.attr('fill','green')});
            cos.click(function(){this.attr('fill','red')});

            s.append(f);
        });

        var g = s.g();

         var image =g.image("romb.svg", 0,0,200,200);
         var clone = image.clone();

         clone.transform('t100,200r45');
    };             





/*
Snap.load("stick1.svg",onDrawingLoaded);


        function onDrawingLoaded(d){
var tulow=d.select("#tulow");
s.append(d);
tulow.animate({width:300,height:300},4000);
}
*/
</script>





<!--
<img src="obrazek.svg" width="152" height="152" />
-->
<!--
    			<video controls width="640" title="kobiety">
    				<source src="video/Kobiety!.mp4">
    			</video>
-->
    		</section>
    		<h1>Co tu znajdziesz</h1>
    		<div id="lewa_kol">
    			<ul>
    				<li>Wyszukiwarkę?</li>
    				<li>pliki?</li>
    			</ul>
    		</div>
    		<div id="prawa_kol">
    			<ul>
    				<li>galerię?</li>
    				<li>i więcej?</li>
    			</ul>
    		</div>
    	</section>
    	</div>
    	
  
<?php
	include "stopka.php";
?>

  </body>	
    	
</html>

