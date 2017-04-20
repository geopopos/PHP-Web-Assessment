<?php
	if($_POST["email"]){
		$email = $_POST["email"];
		$promo_code = $_POST["promo_code"];


		
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head></head><body><style></style><container class="header"><row><columns><h1 class="text-center">Newsletter 2 Has A New Subscriber!</h1></columns></row></container><container class="body-border" style="border-top:8px solid #639"><row><columns><spacer size="32"></spacer><center><img src="http://www.investmentu.com/latest-research/p2p-lending/images/iu-report.png"></center><spacer size="16"></spacer><h4>Subscriber used email:' . $email . ' and promo_code: ' . $promo_code . '</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa vel architecto, perspiciatis eius cum autem quidem, sunt consequuntur, impedit dolor vitae illum nobis sint nihil aliquid? Assumenda, amet, officia.</p><center><menu><item href="http://oxfordclub.com">oxfordclub.com</item><item href="https://www.facebook.com/OXC105/">Facebook</item><item href="tel:4102262067">(410)-226-2067</item></menu></center></columns></row><spacer size="16"></spacer></container></body></html>';

		mail("cpittman@oxfordclub.com", "New Newsletter 2 Subscriber", $msg);
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Newsletter 2</title>

		<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="src/css/custom.css">

		 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
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
		        		<li><a href="index.php">Homepage</a></li>
		        		<li class="active"><a href="product.php">Product</a></li>
		        		<li><a href="about.php">About</a></li>
		      		</ul>
		    	</div>
		  	</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-centered content">
					<div class="row">
						<div class="col-sm-12">
							<h2>Thank you for signing up!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil incidunt, ab quaerat accusamus amet quo consequatur, vel nisi rerum, eius quae, a optio accusantium? Neque modi deserunt ex ab repellendus.</p>
							<p>Doloribus impedit consectetur dolores, dignissimos voluptates blanditiis, numquam voluptate aliquid repellendus ut cupiditate hic minus alias perspiciatis iusto. Velit nam doloremque neque, illum. Impedit totam cupiditate sit, aspernatur, odit voluptatem!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptates odit consequatur, aspernatur quas mollitia magni beatae nobis non ex, exercitationem quia reprehenderit. Corrupti labore vitae, molestias eaque cumque tempore!</p>
							<p>Incidunt laudantium, aliquam cum! Maxime asperiores quas suscipit accusantium quaerat distinctio ipsa vitae soluta, reiciendis laudantium illum impedit molestiae repudiandae! Inventore expedita similique commodi culpa consectetur accusamus assumenda doloremque optio.</p>
							<p>Officiis dolorum hic vel distinctio, velit, temporibus tempore ipsum delectus, totam accusantium facere incidunt laudantium laborum? Illum a recusandae sed ab ipsa magnam ad, mollitia dolore numquam repellendus quod repudiandae?</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-right">
							~George Roros
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="src/js/bootstrap.min.js"></script>
	</body>
</html>