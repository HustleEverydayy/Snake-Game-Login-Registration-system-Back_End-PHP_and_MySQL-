<!-- FileName: Snake.php
 -->
<html>
	<head>
	  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<?php 
	  $BoardSize = $_POST['BoardSize'];
	  $BoardSizex =1500;
	  $BoardSizey =900;
	  $Pace= $_POST['SnakePace'];
	 if($Pace=="緩慢")
		$SnakePace=300;
	 else if($Pace=="普通")
		$SnakePace=250;
	 else if($Pace=="快速")
		$SnakePace=200;
	 $Goals= $_POST['Goals'];
	?>
 

 <body>
  <label type="text" id='scoreLabel'>Score: </label>
  <input type='text' id='scoreText' value='0'></input> 
  <div id="Board">
	<img src="snake.png" id="snake0" />
	<img src="snake.png" id="snake1" />
    <img src="snake.png" id="snake2" />
	
  </div>
  <form action="abc.php" method="post">
  <input type="text" name="score1" placeholder = "請填入你的分數">

  <input type="submit" id='inputText' value="提交分數">	
  </form>

  </body>
<script type="text/javascript">
 
	var level1Score =30;
	var level2Score =70;
	var level3Score =100;
	var level4Score =150;
	var level5Score =180;
	var levelSpeed =200;
	
	var moveOne = true;
	var snakeDead = false;

	var Score=0;
	var snakePart = 2;
	
	var BoardSizex = "<?php echo $BoardSizex ?>px";
	var BoardSizey = "<?php echo $BoardSizey ?>px";
	var SnakePace = "<?php echo $SnakePace ?>";
	var Goals = "<?php echo $Goals ?>";
	var BoardSize1x = "<?php echo $BoardSizex ?>";
	var BoardSize1y = "<?php echo $BoardSizey ?>";
	
	document.getElementById('Board').style.height = BoardSizey;
	document.getElementById('Board').style.width = BoardSizex;
	
			firstDraw=false;        
			function drawFood() {			    
				
			    if(!firstDraw)
				{
				for(k=1;k<=Goals;k++)
				{
					callFood(k);
				}				
				firstDraw=true;
				}
				
			}
			
			function callFood(k) {
					foodX= randomNumbergen(1,BoardSize1x-10);
					foodX=foodX-(foodX%10);
					
					foodY= randomNumbergen(1,BoardSize1y-10);
					foodY=foodY-(foodY%10);
					var incr = "<img src = \"food.png\" id=\"food"+k+"\" style = \"position:absolute;left:"+foodX+";top:"+foodY+";height:10px;\" />";
					document.getElementById('Board').innerHTML += incr;
							
					document.getElementById('food' + k).style.left = foodX;
					document.getElementById('food' + k).style.top = foodY;
			}
			
			function redrawFood(k) {			    
					callFood(k);
						
					var changer = document.getElementById('scoreText');	
					changer.value = Score;
					if (Score == level5Score){
						var answer = confirm("好的! 你已經通過了第五關，你還要繼續嗎?")
						if (answer){
							alert("接下來的速度你自求多福了，快還要更快")
							clearInterval(timer);
							timer=setInterval('mrSnake.move()', 5);
						}
						// else{
						// 	alert("GoodBye!!!")
						// 	window.location = "index.html";
						// }	
					}
					else if(Score == level4Score){
						var answer = confirm("好的! 你已經通過了第四關，你還要繼續嗎")
					  if (answer){
							alert("到這裡將會跟星爆氣流斬一樣快了，準備好了嗎")
							clearInterval(timer);
							timer=setInterval('mrSnake.move()', 15);
						}
						// else{
						// 	alert("GoodBye!!!")
						// 	window.location = "index.html";
						// }	
					}
					else if(Score == level3Score)
					{
					  var answer = confirm("好的! 你已經通過了第三關，你還要繼續嗎?")
					  if (answer){
							alert("繼續以更快的速度進入下一個級別......")
							clearInterval(timer);
							timer=setInterval('mrSnake.move()', 25);
						}
						// else{
						// 	alert("GoodBye!!!")
						// 	window.location = "index.html";
						// }
					}
					else if(Score == level2Score)
					{
					  var answer = confirm("好的! 你已經通過了第二關，你還要繼續嗎?")
					  if (answer){
							alert("接下來會越來越看 要有心理準備喔!!!")
							clearInterval(timer);
							timer=setInterval('mrSnake.move()', 50);
						}
						// else{
						// 	alert("GoodBye!!!")
						// 	window.location = "index.html";
						// }
					}
					else if (Score == level1Score)
					{
						var answer = confirm("好的! 你已經通過了第一關，你還要繼續嗎?")
						 if (answer){
							alert("即將進入下個階段，會變快喔!!!")
								clearInterval(timer);
								timer=setInterval('mrSnake.move()', 100);
						}
						// else{
						// 	alert("GoodBye!!!")
						// 	window.location = "index.html";
						// }
					}
				
					return;		
			}
			
			function randomNumbergen(x, y){
			return Math.floor(Math.random() * y) + x; 
		    }
			
			function Snake() {
                this.x = 30;
                this.y = 30;	
                this.dir = 'R';
            }

            Snake.prototype.changeDir = function(dir) {
                this.dir = dir;
            }

            Snake.prototype.draw = function() {
				if ( snakeDead )
					 {					  
					  return false;
					 }
				else if( this.x < 0 || this.x +10> BoardSize1x )
					 {
					  return false;
					 }
				else if( this.y < 0 || this.y +10> BoardSize1y )
					 {
					  return false;
					  }
                for(i=snakePart; i>0; --i)
				{
					document.getElementById("snake"+i).style.left = document.getElementById("snake"+ (i-1)).style.left;
					document.getElementById("snake"+i).style.top = document.getElementById("snake"+ (i-1)).style.top;
					document.getElementById("snake"+i).style.visibility = 'visible';
				}						
                document.getElementById('snake0').style.left = this.x;
                document.getElementById('snake0').style.top = this.y;
				
				if( !moveOne )
				{
					for(i=snakePart; !snakeDead && i>0; --i)
					{
						if( 
							((((this.x) + "px") == document.getElementById("snake"+i).style.left) &&
							((this.y + "px") == document.getElementById("snake"+i).style.top)) 
							
						   )
						snakeDead = true;
					}
					
					for(i=1;i<=Goals;i++)		
					{
					if((this.x + "px") == document.getElementById("food"+i).style.left &&
					   (this.y + "px") == document.getElementById("food"+i).style.top)
						{
							//dynamically generate snake size
							++snakePart;
							var imageSnake = "<img src = \"snake.png\" id=\"snake"+(snakePart)+"\" style = \"position:absolute;left:0;top:0;height:10px;Visibility:hidden\" />";
							document.getElementById('Board').innerHTML += imageSnake;
							
							var image_x = document.getElementById('Board');
							image_x.removeChild(document.getElementById('food'+i));
							Score=Score+10;
							redrawFood(i);
						}
					}
				}			
				moveOne = false;
				return true;
            }

            Snake.prototype.move = function() {
                switch (this.dir) {
                    case 'L': // Left
                        this.x -= 10;
                        break;
                    case 'U': // Up
                        this.y -= 10;
                        break;
                    case 'R': // Right
                        this.x += 10;
                        break;
                    case 'D': // Down
                        this.y += 10;
                        break;
                }
				
               retval= this.draw();
			   if(!retval){
			   var answer = confirm("你已經死掉，請加油，下次再來!!!")
					  if(answer)
					  {
					  clearInterval(timer);
					//   window.location = "index.html";
					  }
				 }
				  drawFood();
            }

            var mrSnake = new Snake();

            window.addEventListener('keydown', function(event) {
                switch (event.keyCode) {
                    case 37: // Left
					    if(mrSnake.dir!='R')
						{
                        mrSnake.changeDir('L');
						}
						break;
                    case 38: // Up
						if(mrSnake.dir!='D')
						{
                        mrSnake.changeDir('U');
						}
                        break;
                    case 39: // Right
                        if(mrSnake.dir!='L')
						{
						mrSnake.changeDir('R');
						}
                        break;
                    case 40: // Down
                        if(mrSnake.dir!='U')
						{
						mrSnake.changeDir('D');
						}
                        break;
                }
            }, false);

            timer=setInterval('mrSnake.move()', SnakePace);
</script>
</html>