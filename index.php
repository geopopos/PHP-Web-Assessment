<?php
	$response_template = $_GET["response_template"];
	$promo_code = $_GET["promo_code"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Investing</title>

		<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="src/css/custom.css">

		 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <script>
			function validateEmail() {
			    var x = document.forms["optinForm"]["email"].value;
			    var posat = x.indexOf("@");
			    var posperiod = x.lastIndexOf(".");
			    var error = document.getElementById("form-error");
			    if (posat<1 || posperiod<posat+2 || posperiod+2>=x.length) {
			        error.style.display = "block";
			        error.innerHTML = "Please Enter A Valid Email Address"
			        return false;
			    }else {
			    	error.style.display = "none";
			    	var form = document.getElementById("optinForm");
			    	if(document.getElementById("newsletter1").checked){
			    		form.setAttribute("action", "server1.php");
			    	}else if(document.getElementById("newsletter2").checked){
			    		form.setAttribute("action", "server2.php");
			    	}else {
			    		error.style.display = "block";
				        error.innerHTML = "Please choose a Newsletter to subscribe to"
				        return false;
			    	}
			    }
			}
		</script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        		<span class="sr-only">Toggle navigation</span>
		        		<span class="icon-bar"></span>
		        		<span class="icon-bar"></span>
		        		<span class="icon-bar"></span>
		      		</button>
		    	</div>
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      		<ul class="nav navbar-nav">
		        		<li class="active"><a href="index.php">Homepage</a></li>
		        		<li><a href="product.php">Product</a></li>
		        		<li><a href="about.php">About</a></li>
		      		</ul>
		    	</div>
		  	</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-centered content">
					<div class="row">
						<div class="col-sm-3 text-center" id="headline">
							<h2>The Peer-to-Peer Checklist: Four Crucial Traits to Check Before You Invest in a P2P Loan</h2>
						</div>
						<div class="col-sm-offset-1"></div>
						<div class="col-sm-8" id="offer">
							<div class="row">
								<h3 class="text-center">In this Free Investment U report, you will discover:</h3>
								<ul id="offer-list">
									<li class="lead">The Ins and Outs of the Most Profitable Platform for Passive Income on the Web</li>
									<li class="lead">How to Earn Four Times the Average Investor’s Annual Return</li>
									<li class="lead">The foolproof way to boost your returns while simultaneously lowering your risk </li>
								</ul>
							</div>
							<div class="row">
								<h3 class="text-center">Get your Free Exclusive Report delivered to your inbox</h3>
							</div>
							<div class="row" id="form-area">
								<div class="col-sm-4">
									<img class="form-img" src="src/img/iu-report.png">
								</div>
								<div class="col-sm-8">
									<form action="" method="POST" name="optinForm" onsubmit="return validateEmail();" id="optinForm">
										<div class="form-group">
											<input type="text" id="emailAddress" class="form-control" name="email" placeholder="Enter your email...">
										</div>
										<?php
											if($reponse_template === ""){
										?>
										<input type="hidden" class="form-control" name="response_template" value="">
										<?php
										}else{
										?>
										<input type="hidden" class="form-control" name="response_template" value="<?php echo $response_template; ?>">
										<?php
										}
										?>
										<?php
											if($promo_code === ""){
										?>
										<input type="hidden" class="form-control" name="promo_code" value="">
										<?php
										}else{
										?>
										<input type="hidden" class="form-control" name="promo_code" value="<?php echo $promo_code; ?>">
										<?php
										}
										?>
										<div class="form-group">
											<label>
												<input type="checkbox" id="newsletter1" name="newsletter1" value="newsletter1" checked> Subscribe to Newsletter 1
											</label>
										</div>
										<div class="form-group">
											<label>
												<input type="checkbox" id="newsletter2" name="newsletter2" value="newsletter2" checked> Subscribe to Newsletter 2
											</label>
										</div>
										<button type="submit" class="btn btn-danger btn-block text-uppercase">Send me the Free Report!</button>
										<div id="form-error" class="text-center text-uppercase">Error: you messed up!</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
	</body>
</html>