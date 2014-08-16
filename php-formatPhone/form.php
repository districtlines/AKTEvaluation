<?php
	if(isset($_POST['submit'])){
		include 'class.validation.php';
		//$validate = new Validations;
		
		

		if( isset($success) ) {
			$message = 'Success';
		}else{
			$message = 'Fail';
		}
	}
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<title>Validate Phone</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<style>
			body {
				padding: 50px 0 0 0;
			}
			
			.red  {
				border: 1px solid red;
				background: #f00;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="well">
						<h3>Instructions</h3>
						Develop a customer facing application that will take a <u>domestic (US) phone number of any format</u> as input and save it to a database of some kind.
						<br />Any technology stack may be used.
						<br />Please chronicle your design and development process in some form, to us the process is just as important as the final product for this demo.
						<br />You can validate with javascript/jquery, PHP, or both. Be prepared to explain the process.
					</div>
				</div>
				<div class="col-xs-12">
					<form action="/form.php" method="post">
						<input type="tel" name="phone" id="phone" placeholder="Phone" />
						<input type="submit" name="submit" value="submit">
					</form>
				</div>
			</div>
		</div>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
			jQuery(document).ready(function(){});
		</script>
	</body>
</html>