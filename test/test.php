	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="yui3-js-enabled"><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div><head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Playground</title>
	<script src="//js.leapmotion.com/0.2.0/leap.js"></script>
    <link rel="stylesheet" href="style.css"></link>  
    <link rel="stylesheet" href="rubik.css"></link>  
    <script src="http://yui.yahooapis.com/3.4.1/build/yui/yui-min.js"></script>
    <script src="rubik.js"></script>
    <script src="message-scroll.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>	


<section id="tutorial">
    <p><span>Move</span> your device to trigger the accelerometers and rotate the cube. 
        Use <span>flick</span> gestures to move the faces. 
    <span>Rotate</span> your device to start the <span class="yellow">landscape</span> application. Have fun!</p>
</section>

<section id="messages">
<div class="wrapper">
    <ul class="active">
        <li class="prev"></li>
        <li class="current"></li>
        <li class="next"></li>
    </ul>

    <div class="populate">
        
        
    </div>
</div>
</section>

<section id="rubik">
<div id="cube-container">
    <div id="cube-viewport">
        <div id="cube">
        <!-- UP FACE -->            
            <!-- LEFT COLUMN (L)  -->                
            <div class="utl cubie up LM UE BS"><div><span>U1</span></div></div> 
            <div class="ucl cubie up LM UE CS"><div><span>U2</span></div></div>
            <div class="ubl cubie up LM UE FS"><div><span>U3</span></div></div>
            <!-- CENTER COLUMN (C)  -->            
            <div class="utc cubie up CM UE BS"><div><span>U4</span></div></div>
            <div class="ucc cubie up CM UE CS"><div><span>U5</span></div></div>
            <div class="ubc cubie up CM UE FS"><div><span>U6</span></div></div>
            <!-- RIGHT COLUMN (R)  -->
            <div class="utr cubie up RM UE BS"><div><span>U7</span></div></div>
            <div class="ucr cubie up RM UE CS"><div><span>U8</span></div></div>
            <div class="ubr cubie up RM UE FS"><div><span>U9</span></div></div>
        <!-- END UP FACE -->  

        <!-- FRONT FACE -->
            <!-- LEFT COLUMN (L)  -->                
            <div class="ftl cubie front LM UE FS"><div><span>F1</span></div></div>
            <div class="fcl cubie front LM CE FS"><div><span>F2</span></div></div>
            <div class="fbl cubie front LM DE FS"><div><span>F3</span></div></div>
            <!-- CENTER COLUMN (C)  -->            
            <div class="ftc cubie front CM UE FS"><div><span>F4</span></div></div>
            <div class="fcc cubie front CM CE FS"><div><span>F5</span></div></div>
            <div class="fbc cubie front CM DE FS"><div><span>F6</span></div></div>
            <!-- RIGHT COLUMN (R)  -->
            <div class="ftr cubie front RM UE FS"><div><span>F7</span></div></div>
            <div class="fcr cubie front RM CE FS"><div><span>F8</span></div></div>
            <div class="fbr cubie front RM DE FS"><div><span>F9</span></div></div>
        <!-- END FRONT FACE -->
        
        <!--DOWN FACE -->
            <!-- LEFT COLUMN (L)  -->                
            <div class="dtl cubie down LM DE FS"><div><span>D1</span></div></div>
            <div class="dcl cubie down LM DE CS"><div><span>D2</span></div></div>
            <div class="dbl cubie down LM DE BS"><div><span>D3</span></div></div>
            <!-- CENTER COLUMN (C)  -->                
            <div class="dtc cubie down CM DE FS"><div><span>D4</span></div></div>
            <div class="dcc cubie down CM DE CS"><div><span>D5</span></div></div>
            <div class="dbc cubie down CM DE BS"><div><span>D6</span></div></div>
            <!-- RIGHT COLUMN (R)  -->        
            <div class="dtr cubie down RM DE FS"><div><span>D7</span></div></div>
            <div class="dcr cubie down RM DE CS"><div><span>D8</span></div></div>
            <div class="dbr cubie down RM DE BS"><div><span>D9</span></div></div>
        <!-- END DOWN FACE -->
        
        <!--BACK FACE -->    
            <!-- LEFT COLUMN (L)  -->           
            <div class="btl cubie back LM DE BS"><div><span>B1</span></div></div>
            <div class="bcl cubie back LM CE BS"><div><span>B2</span></div></div>
            <div class="bbl cubie back LM UE BS"><div><span>B3</span></div></div>
            <!-- CENTER COLUMN (C)  -->           
            <div class="btc cubie back CM DE BS"><div><span>B4</span></div></div>
            <div class="bcc cubie back CM CE BS"><div><span>B5</span></div></div>
            <div class="bbc cubie back CM UE BS"><div><span>B6</span></div></div> 
            <!-- RIGHT COLUMN (R)  -->    
            <div class="btr cubie back RM DE BS"><div><span>B7</span></div></div>
            <div class="bcr cubie back RM CE BS"><div><span>B8</span></div></div>
            <div class="bbr cubie back RM UE BS"><div><span>B9</span></div></div> 
        <!--END BOTTOM FACE --> 
        
        <!--LEFT FACE -->
            <!-- LEFT COLUMN (L)  -->           
            <div class="ltl cubie left LM UE BS"><div><span>L1</span></div></div>
            <div class="lcl cubie left LM CE BS"><div><span>L2</span></div></div>
            <div class="lbl cubie left LM DE BS"><div><span>L3</span></div></div>
            <!-- CENTER COLUMN (C)  -->  
            <div class="ltc cubie left LM UE CS"><div><span>L4</span></div></div>
            <div class="lcc cubie left LM CE CS"><div><span>L5</span></div></div>
            <div class="lbc cubie left LM DE CS"><div><span>L6</span></div></div>
            <!-- RIGHT COLUMN (R)  -->    
            <div class="ltr cubie left LM UE FS"><div><span>L7</span></div></div>
            <div class="lcr cubie left LM CE FS"><div><span>L8</span></div></div>
            <div class="lbr cubie left LM DE FS"><div><span>L9</span></div></div>
        <!--END LEFT FACE -->   
        
        <!--RIGHT FACE -->
            <!-- LEFT COLUMN (L)  -->           
            <div class="rtl cubie right RM UE FS"><div><span>R1</span></div></div>
            <div class="rcl cubie right RM CE FS"><div><span>R2</span></div></div>
            <div class="rbl cubie right RM DE FS"><div><span>R3</span></div></div>
            <!-- CENTER COLUMN (C)  -->  
            <div class="rtc cubie right RM UE CS"><div><span>R4</span></div></div>
            <div class="rcc cubie right RM CE CS"><div><span>R5</span></div></div>
            <div class="rbc cubie right RM DE CS"><div><span>R6</span></div></div>
            <!-- RIGHT COLUMN (R)  -->    
            <div class="rtr cubie right RM UE BS"><div><span>R7</span></div></div>
            <div class="rcr cubie right RM CE BS"><div><span>R8</span></div></div>
            <div class="rbr cubie right RM DE BS"><div><span>R9</span></div></div>
        <!--END LEFT FACE -->  
              
         </div>
    </div>
</div>  

<aside>
    <section id="main">
        <div id="cube-controls">
            <ul>
                <li>
                    <div class="undo"></div>
                </li>
                <li>
                    <div class="redo"></div>
                </li>
                <li>
                    <div  class="solve"></div>
                </li>
                <li id="rotation">
                    <div class="rotate"></div>
                </li>
            </ul>
        </div>   
    </section>
</aside>
</section>
<script>
YUI().use('node','rubik','message-scroll',function(Y){
    var scrollpanel = new Y.MessageScroll();
    var cube = window.cube = new Y.Rubik();
    cube.run();    
});
</script>
<script>
var controllerOptions = {enableGestures: true};

var previousFrame;
var paused = false;
var pauseOnGesture = false;

Leap.loop(controllerOptions, function(frame) {
	
});
	/*
  if (paused) {
    return; // Skip this update
  }
  
  if (frame.hands.length > 0) {
    //for (var i = 0; i < frame.hands.length; i++) {
      var handRot = frame.hands[0];
	  
	  if (handRot.pointables.length > 2)  {
	  	rotate(handRot.palmPosition[2], handRot.palmPosition[0]);
		  
	  }
	
  }
  function rotate(newX,newY){

            cube = document.getElementById('cube');

            cube.style.webkitTransform = "rotateX(" + newX + "deg) rotateY(" + newY + "deg)";
            cube.style.MozTransform = "rotateX(" + newX + "deg) rotateY(" + newY + "deg)";
            //cube.style.transform = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
	}
  
  
	if (frame.gestures.length > 0) {
    if (pauseOnGesture) {
      togglePause();
    }
    for (var i = 0; i < frame.gestures.length; i++) {
      var gesture = frame.gestures[i];

      switch (gesture.type) {
        case "circle":
			
          break;
        case "swipe":
		
          if (Math.abs(gesture.direction[0]) > Math.abs(gesture.direction[1])) {
			if (gesture.direction[0] > 0) {
				var rotateY = 'right';
				console.log('right');
				var parts = new Array("fbr", "cubie", "front", "RM", "DE", "FS");
				movement = {face: parts[5].charAt(0),slice: parts[5].charAt(1),rotate: rotateY};
				var plane = this._plane;
				//list = Y.all('.' + m.face + m.slice);
				//this._movement = m;
				this._moving = true;
				//this._attachToPlane(list);
				plane.addClass('moving').addClass(m.slice +'-'+ m.rotate);
					
			} else {
				console.log('left');
				var move = 'DE';
				if(move && move!== 'on'){
					move = move.split('');
					cube._expectingTransition = true;
					cube._doMovement({face: move[0], slice: move[1],rotate: 'right'});
				}
			}
		  } else if (gesture.direction[1] > 0) {
			  console.log('up');
			  var move = 'FS';
				if(move && move!== 'on'){
					move = move.split('');
					cube._expectingTransition = true;
					cube._doMovement({face: move[0], slice: move[1],rotate: 'right'});
				}
		  } else {
			  console.log('down');
			  var move = 'LM';
				if(move && move!== 'on'){
					move = move.split('');
					cube._expectingTransition = true;
					cube._doMovement({face: move[0], slice: move[1],rotate: 'right'});
				}
		  }
          break;
        default:
          console.log('unknown type');
      }
    }
  }
  else {
  }
  // Store frame for motion functions
  previousFrame = frame;
})
		/*
		if (!frame.hands.length < 1) {
			var hand1 = frame.hands[0];
			var fingers1 = hand1.fingers;
			
			if (!fingers1.empty) {
				var gestures = new Array();
				gestures = frame.gestures;
				
				for (var i = 0; i < gestures.length; i++) {
					if (gestures[i].type = gesture.gestureType.TYPESWIPE) {
						var swipe = SwipeGesture(gst);
						if (Math.abs(swipe.Direction.x) >  Math.Abs(swipe.Direction.y))	 {
							if (swipe.Direction.x > 0) {
								console.log('right');
                                //SwipeAction(fingers, SwipeDirection.Right)
								var move = 'DE';
								if(move && move!== 'on'){
									move = move.split('');
									cube._expectingTransition = true;
									cube._doMovement({face: move[0], slice: move[1],rotate: 'right'});
								}
							} else {
                                //SwipeAction(fingers, SwipeDirection.Left)
							} 
						} else {
                            if (swipe.Direction.y > 0) {
								console.log('up');
                                //SwipeAction(fingers, SwipeDirection.Up)
								var move = 'FS';
								if(move && move!== 'on'){
									move = move.split('');
									cube._expectingTransition = true;
									cube._doMovement({face: move[0], slice: move[1],rotate: 'right'});
								}
							} else {
                                //SwipeAction(fingers, SwipeDirection.Down)	
							}
						}
					}
				}
			}
		}
		*/
		
</script>
</section>

</body>
</html>
	