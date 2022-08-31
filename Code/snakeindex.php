<!-- FileName: index.html
 -->
 <?php 
session_start();
?>
<html>
	<head>
	  <link rel="stylesheet" type="text/css" href="style.css"> 
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body style="background-color:#9beeaf">
 <div id="main">
	<br/><br/>
	<div style="font-size:80px;font-style:bold;">貪吃蛇</div>
	<br/><br/>
	<h4 style="font-size:30px">選擇遊戲難度：</h4>
	
	<form action="Snake.php" method="post"> 
	場地大小：<select name="BoardSize" id="BoardSize" style="font-size:30px">
	<option>1500 X 900</option>
	</select>
	
	&nbsp遊戲速度： <select name="SnakePace" id="SnakePace" style="font-size:30px">
	<option>緩慢</option>
	<option>普通</option>
	<option>快速</option>
	</select>

	&nbsp食物數量： <select name="Goals" id="Goals" style="font-size:30px">
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>10</option>
	</select>


	<input type="submit" value="Play" style="font-size:30px"/>
	</form>

	</div>
	</br></br></br></br></br>
	<div id="instructions">
						<h4 id="help"> 遊戲規則:</h4>
						<ul>
						<li>使用方向鍵控制蛇頭方向。</li>
						<li>吃到食物會使身體變長。</li>
						<li>當蛇頭碰到牆壁或與自己尾巴相撞，遊戲將會結束。</li>
						<li>遊戲有五個等級，完成第五級後遊戲將不會提升等級，直到死亡才會結束。</li>
						<li>當你越過下一層時，蛇會移動得更快。</li>
						</ul>
	</div>

</body>
</html>
