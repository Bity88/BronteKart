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

<div class="container" style="margin-top: 100px; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign Up</h3>
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($msg)) {
                        echo "<div class='alert alert-success'><a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" . $msg . "</div>";
                    }
                    ?>
                    <form role="form" action="" method="POST">
                        <fieldset>
                            <?php
                            if (isset($error['fname'])) {
                                echo "<div class='err-message'>" . $error['fname'] . "</div>";
                            } elseif (isset($error['num_fname'])) {
                                echo "<div class='err-message'>" . $error['num_fname'] . "</div>";
                            }
                            ?>
                            <div class="form-group">
                                <input class="form-control" placeholder="First Name" name="fname" type="text" autofocus value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>">
                            </div>
                            <?php
                            if (isset($error['lname'])) {
                                echo "<div class='err-message'>" . $error['lname'] . "</div>";
                            } elseif (isset($error['num_lname'])) {
                                echo "<div class='err-message'>" . $error['num_lname'] . "</div>";
                            }
                            ?>
                            <div class="form-group">
                                <input class="form-control" placeholder="Last Name" name="lname" type="text" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>">
                            </div>
                            <?php
                            if (isset($error['email'])) {
                                echo "<div class='err-message'>" . $error['email'] . "</div>";
                            }
                            elseif (isset($error['email-validate-err'])) {
                                echo "<div class='err-message'>" . $error['email-validate-err'] . "</div>";
                            }
                            elseif (isset($error['email_exists'])) {
                                echo "<div class='err-message'>" . $error['email_exists'] . "</div>";
                            }
                            ?>
                            <span id="email_status"></span>
                            <div class="form-group">
                                <input id="email" onkeyup="checkemail();" class="form-control" placeholder="E-mail" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" />
                            </div>

                            <?php
                            if (isset($error['password'])) {
                                echo "<div class='err-message'>" . $error['password'] . "</div>";
                            }
                            elseif (isset($error['adj_password'])) {
                                echo "<div class='err-message'>" . $error['adj_password'] . "</div>";
                            }
                            ?>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <?php
                            if (isset($error['phone_err'])) {
                                echo "<div class='err-message'>" . $error['phone_err'] . "</div>";
                            } elseif (isset($error['phone_alpha_err'])) {
                                echo "<div class='err-message'>" . $error['phone_alpha_err'] . "</div>";
                            }
                            ?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                    value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                            </div>
                            <?php
                            if (isset($error['terms'])) {
                                echo "<div class='err-message'>" . $error['terms'] . "</div>";
                            }
                            ?>
                            <?php
                            if (isset($error['age'])) {
                                echo "<div class='err-message'>" . $error['age'] . "</div>";
                            }
                            ?>
                            <div class="form-group">
                                <p class="help-block text-xs">Choose your age.</p>
                                <select class="form-control" id="age" name="age">
                                </select>
                            </div>
                              <div class="checkbox">
                                <label>
                                    <input name="terms" type="checkbox">Yes, I agree to <a href="" style="">terms and conitions.</a>
                                </label>
                            </div>

                            <button name="sign_up" type="submit" class="btn btn-md btn-success btn-block validate">Sign Up</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- JS -->
<script type="text/javascript">
    function checkemail(){
        var email=document.getElementById("email").value;
        if(email){
            $.ajax({
                type: 'post',
                url: 'core/check_email.php',
                data: {
                    user_email:email,
                },
                success: function (response) {
                    var testEmail = /^[ ]*([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})[ ]*$/i;
                    $('#email').bind('input propertychange', function() {
                        if (testEmail.test($(this).val())) {
                            $(this).css({ 'border':'1px solid green'});
                            $('button.validate').prop("disabled",false);
                        } else {
                            $(this).css({ 'border':'1px solid red'});
                            $('button.validate').prop("disabled",true);
                        }
                    });
                    $('#email_status').html(response);
                    if(response=="OK"){
                        return true;    
                    }
                    else{
                        return false;   
                    }
                }
            });
        }else
        {
            $('#email_status').html("");
            return false;
        }
    }
    checkemail();
</script>

<script type="text/javascript">
        var initAge = 16;
        var endAge = 99;
        var options = "";
        var a;
        for (a=initAge; a<=endAge; a++){
            options += "<option>" + a + "</option>"
        }
        document.getElementById("age").innerHTML = options;

</script>
   







	<!--FOOTER-->
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
