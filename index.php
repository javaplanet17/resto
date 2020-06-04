<?php
	include 'database/searchresult.php';
	if(isset($_POST['submit'])){
		$result = getresult($_POST['foodname']);
	}else{
		// do nothing
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="mobile.css">
	<link rel="stylesheet" type="text/css" href="tablet.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="scroll.css">
	<link rel="stylesheet" type="text/css" href="newanime.css">
	<link rel="stylesheet" type="text/css" href="alert/alert.css">
	<link rel="stylesheet" type="text/css" href="alert/search.css">
	<!-- <script type="text/javascript"></script> -->
</head>
<body>
<div class="inner">
	<div class="left">
		<div class="nav">
			<div class="restaurantdescription">
				<ul class="leftnav" id="leftnav" style="margin-top: 2px;">
					<li class="inline navtitle bounce" ><h2 class="title">LunchBreak</h2></li>
					<li class="inline navinline navsubtitle" onclick="showalert('searchbox');"><img src="img/menu.png"  width="22px" height="22px" ></li> 
				</ul>
				<br><br>
				<h1 class="supertitle">Pizza pop</h1>
				<p class="subtitle">2199 King Street,VA 22134-31551 United States</p>
				<p class="subtitles">Phone Number: <b>812-899-2912</b></b>
			</div>
			<ul>
				<li class="inline navinline" onclick="getcontent('food.php','#displayed','#salelist');"><h2 class="tagtitle">Main Dishes</h2></li>
				<li class="inline navinline" onclick="getcontent('side.php','#displayed','#salelist');"><h2 class="tagtitle">Side Dishes</h2></li>
				<li class="inline navinline" onclick="getcontent('drink.php','#displayed','#salelist');"><h2 class="tagtitle">Drinks</h2></li>
			</ul>

			<div class="salelist" id="salelist">
				<!-- <h2 class="title">Main Dishes</h2> -->
				<ul class="list">
					<li class="inline">
						<div class="foodbox">
							<img src="img/largepizza.jpg" width="100px" height="100px"><br>
							<b class="title">Large Pizza</b>
							<ul class="margin-tp">
								<li class="inline margin-rt">Chicken</li>
								<li class="inline margin-rt">Beef</li>
								<li class="inline margin-rt">Combination</li>
							</ul>
							<p class="margin-tp cartdescriptionbox">Signature Chinese noodle dish with choice of protein</p>
							<h4 class="price margin-tp ">$ 10</h4>
							<button class="addcartbutton" onclick="updatecartitems('large spizza','add');">Add to cart</button>
						</div>
					</li>
					<li class="inline">
						<div class="foodbox">
							<img src="img/medpizza.jpg" width="100px" height="100px"><br>
							<b class="title">Medium Pizza</b>
							<ul class="margin-tp">
								<li class="inline margin-rt">Chicken</li>
								<li class="inline margin-rt">Beef</li>
								<li class="inline margin-rt">Combination</li>
							</ul>
							<p class="margin-tp cartdescriptionbox">Signature Rice dish with choice of protein</p>
							<h4 class="price margin-tp">$ 7</h4>
							<button class="addcartbutton" onclick="updatecartitems('medium pizza','add');">Add to cart</button>
						</div>
					</li>
					<li class="inline">
						<div class="foodbox">
							<img src="img/chicken.jpg" width="100px" height="100px"><br>
							<b class="title">Chicken Wing</b>
							
							<p class="margin-tp cartdescriptionbox">Most Well Known Chinese dishes in the USA</p>
							<h4 class="price margin-tp">$ 8</h4>
							<button class="addcartbutton" onclick="updatecartitems('chicken wing','add');">Add to cart</button>
						</div>
					</li>
					<li class="inline">
						<div class="foodbox">
							<img src="img/meal.jpg" width="100px" height="100px"><br>
							<b class="title">Family meal</b>
							
							<p class="margin-tp cartdescriptionbox">Most Well Known Chinese dishes in the USA</p>
							<h4 class="price margin-tp">$ 8</h4>
							<button class="addcartbutton" onclick="updatecartitems('family meal','add');">Add to cart</button>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<div class="right">
		<div class="nav">
			<ul class="rightnav">
				<li class="inline navinline">
					<div class="typebutton">
						<ul>
							<li class="inline" onclick="delivery();"><img class="typebuttonimg" src="img/deliverytruck.png" width="30px" height="30px"></li>
							<li class="inline" onclick="delivery();"><p class="typebuttontext">Delivery</p></li>
						</ul>
					</div>
				</li>
				<li class="inline navinline">
					
					<div class="typebutton">
						<ul>
							<li class="inline" onclick="pickup();"><img class="typebuttonimg" src="img/pickupbag.png" width="23px" height="23px"></li>
							<li class="inline" onclick="pickup();"><p class="typebuttontext">Pick up</p></li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="content">
				<div id="ordertype">
					<h2 class="title">Delivery to:</h2>
					<p class="cartsubtitle">Address:</p>
					<input class="addressbox" value="5419 Queen St, 22051 VA">
				</div>
				<h4 class="">Cart:</h4>
				<ul class="cartboxes" id="cartboxes">

				</ul>
				<h2 class="totaltitle">Total: $22.82</h2>
				<button class="checkoutbutton">Check Out</button>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="select.js"></script>
	<script type="text/javascript" src="alert/alert.js"></script>
</body>
</html>