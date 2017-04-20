<?php
	if($_POST["email"] != null){
		$email = $_POST["email"];
		$response_template = $_POST["response_template"];
		$promo_code = $_POST["promo_code"];
		$newsletter1_checked = $_POST["newsletter1"];
		$newsletter2_checked = $_POST["newsletter2"];
		$newsletter1 = 1;
		$newsletter2 = 0;
		if($newsletter2_checked == "newsletter2"){
			$newsletter2 = true;
		}

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "email_optin";

		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		//Check Connection
		if($conn->connect_error){
			die("Connection failed:" . $conn->connect_error);
		}

		$sql = "INSERT INTO users (email, response_template, promo_code, newsletter1, newsletter2) 
		VALUES ('$email', '$response_template', '$promo_code', $newsletter1, $newsletter2)";

		if($conn->query($sql) === TRUE){
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		
		$conn->close();


	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Newsletter 1</title>

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
		<?php 
			if($newsletter2 == 1){
				echo '<script type="text/javascript">
					var form = document.createElement("form");
					form.setAttribute("method", "post");
					form.setAttribute("action", "server2.php");

					var email = document.createElement("input");
					email.setAttribute("type", "text");
					email.setAttribute("name", "email");
					email.value="' . $email . '";

					var promo_code = document.createElement("input");
					promo_code.setAttribute("type", "text");
					promo_code.setAttribute("name", "promo_code");
					promo_code.value= "' . $promo_code . '";

					form.appendChild(email);
					form.appendChild(promo_code);

					document.getElementsByTagName("body")[0].appendChild(form);

					form.submit();
				</script>';
			}
		?>
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