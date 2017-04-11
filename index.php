<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Project Layout Group 6</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Styling Css -->
	    <link href="css/creative.css" rel="stylesheet">
	</head>

	<body>
		<!-- Header containing Account Buttons and Logos -->
	    <header>
	        <nav>
	            <div class="container ">
	                <div class="row ">
	                	<!-- logo -->
	                    <div class="col-md-3">
	                        <img src="img/logo.png" class="img-responsive top-logo" alt="logo-top" />
	                    </div>
	                    <!-- account buttons -->
	                    <div class="col-md-3">
							<div class = "btn-group btngr1">
	                            <button type = "button" class = "btn btn-default dropdown-toggle" data-toggle = "dropdown">
	                              Account <span class="glyphicon glyphicon-user"></span>
	                              <span class = "caret"></span>
	                           	</button>
	                           <ul class = "dropdown-menu" role = "menu">
	                              <li><a href = "log_in.php">Login</a></li>
	                              <li><a href = "sign_up.php">SignUp</a></li>
	                              <li><a href = "#">Profile</a></li>
	                           </ul>
	                        </div>
							<div class = "btn-group btngr2">
	                           <button type = "button" class = "btn btn-default">
	                              Wishlist
	                              <span class = "glyphicon glyphicon-heart-empty"></span>
	                           </button>
	                        </div>
	                    </div>
	                    <!-- searchbox -->
	                    <div class="col-md-4 top-search">
	                        <div class="input-group yoo1">
	                            <input type="text" class="form-control yoo2" placeholder="Search" name="q">
	                            <div class="input-group-btn">
	                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-1">
	                      
	                    </div>
	                    <!-- cart icon / remove later-->
	                    <div class="col-md-1">
	                      <a href="#" class="cartr"><img src="img/cart.png" class="img-responsive cart hidden-md"></a>
	                    </div>
	                </div>
	            </div>
	        </nav>
	    </header>           
	    
	    
	<!-- Begin Navbar -->
	<div class="xyz">
	<div id="nav">
	   <nav class="navbar navbar-default navbar-custom">
	      
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand brands" href="#">BronteKart</a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	          <ul class="nav navbar-nav">
	            <li class="active firstt"><a href="#">Home<span class="sr-only">(current)</span></a></li>
	            <li><a href="#">Featured</a></li>
	            <li><a href="#">FAQ</a></li>
	            <li><a href="#">Contact Us</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shops <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li role="separator" class="divider"></li>
	                <li><a href="#">Separated link</a></li>
	                <li role="separator" class="divider"></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catagory <span class="caret"></span></a>
	              <ul class="dropdown-menu multi-column columns-3">
	              	<div class="row">
	              			<div class="col-sm-4">
	              					<ul class="multi-column-dropdown">
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						
	              					</ul>
	              			</div>

	              			<div class="col-sm-4">
	              					<ul class="multi-column-dropdown">
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						
	              					</ul>
	              			</div>


	              			<div class="col-sm-4">
	              					<ul class="multi-column-dropdown">
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						<li><a href="#">dfdf</a></li>
	              						
	              					</ul>
	              			</div>

	              	</div>
	               
	              </ul>
	            </li>
	          </ul>
	        </div><!-- /.navbar-collapse -->

	      
	    </nav>
	</div>
	</div>


	<!-- Begin Body -->
	<!--slider to be kept here -->
	<div class="container-fluid slider">
	    <div class="row">
	    	<h1 class="text-center slider-header"></h1>
	    </div>
	    <div class="row">
	    	<h2 class="text-center slider-caption">Eat Healthy</h2>
	    </div>
	    <div class="row text-center slider-button">
	    	<a href="#"><button type="button" class="btn btn-primary btn-lg btn-round">Learn More</button></a>
	    </div>
	</div>

	<!-- most sold / popular items to be kept here -->
	<div class="container items">
		<div class="row">
			<h3 class="text-center item-heading">Popular Items</h3>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<img src="img/onion.jpg">
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>
			
		</div>
	</div><!-- end popular items-->


	<!-- another slider here -->
	<div class="container-fluid fixed-back">
		<div class="row">
	    	<h1 class="text-center slider-header">Keep Slider Hereeeee</h1>
	    </div>
	    <div class="row">
	    	<h2 class="text-center slider-caption">Eat Healthy</h2>
	    </div>
	    <div class="row text-center slider-button">
	    	<a href="#"><button type="button" class="btn btn-primary btn-lg btn-round">Learn More</button></a>
	    </div>
	</div>

	<!-- special offer - items here -->
	<div class="container">
		<div class="row text-center">
			<h4 class="s-offer">Special Offers</h4>
		</div>
		<div class="row">
			<div class="col-md-5">
				<img src="img/onion.jpg" class="img-responsive sp-image" alt="special-offer-image" />
			</div>
			<div class="col-md-1 text-center">
				<img src="img/discount.png" class="img-responsive img-discount pull-right" />
			</div>
			<div class="col-md-5 of-tx-desc">
				<div class="row text-center">
					<p class="sp-of-onion">Onion</p>
				</div>
				<div class="row">
					<p class="sp-of-onion-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in laborum.</p>
				</div>
				<div class="row">
					<ul>
						<li> Eat Foods </li>
						<li> Drink Drinks </li>
						<li> Nice Nice </li>
					</ul>
				</div>
				<div class="row text-center">
						<button type="button" class="btn btn-default btn-md">
				          <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD TO CART
				        </button>
				</div>
			</div>

		</div>
	</div>



	<div class="container-fluid banner">
		<!--image from css -->
	</div>

	<div class="container footes">
		<div class="col-md-7 ">
			<div class="col-md-6">
				<div class="row footes-title">
					Information
				</div>
				<div class="row footes-links">
					<a href="#">About Us</a>
				</div>
				<div class="row footes-links">
					<a href="#">Contact Us</a>
				</div>
				<div class="row footes-links">
					<a href="#">Location</a>
				</div>
				<div class="row footes-links">
					<a href="#">Customer Support</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row footes-title">
					Services/Account
				</div>
				<div class="row footes-links">
					<a href="#">FAQ</a>
				</div>
				<div class="row footes-links">
					<a href="#">Shipping</a>
				</div>
				<div class="row footes-links">
					<a href="#">Return Policy</a>
				</div>
				<div class="row footes-links">
					<a href="#">Payment Methods</a>
				</div>
			</div>
		</div>

		<div class="col-md-5 text-center">
			<div class="row footes-title">
				Newsletter Signup
			</div>
			<div class="row">
				<p>Suscribe Now and Recieve upto 37% discount <br />on your shoppings.</p>
			</div>
			<div class="row">
				<form action="" method="post" role="form">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </span>
                      <input class="form-control" type="text" id="" name="" placeholder="xyz@example.com">
                    </div><br />
                    <input type="submit" value="Subscribe" class="btn btn-large btn-primary news-sub" />
              	</form>
			</div>
		</div>
	</div>

	<div class="container">
		<hr class="hr1" />
	</div>

	<div class="container footer">
		<div class="row">
			<div class="col-md-6 copyright">
				<p>2017 @ BronteKart  -  All Rights Reserved</p>
			</div>
			<div class="col-md-6">
						<ul class="list-inline text-center">
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Policy</a></li>
						</ul>
			</div>
		</div>
	</div>

	

	



	    <!-- jQuery -->
	    <script src="vendor/jquery/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->

	    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	    <!-- script for sticky navbar - sticks to top after scrolling -->
	    <script type="text/javascript">
	    $('#nav').affix({
		      offset: {
		        top: $('header').height()
		      }
		}); 
		</script>
		<script type="text/javascript">
			var menu = $(".brands");
			$(window).scroll(function(){
			  //more then or equals to
			  if($(window).scrollTop() >= 200 ){
			       menu.show();

			  //less then 200px from top
			  } else {
			     menu.hide();

			  }
			});
		</script>
	</body>

</html>
