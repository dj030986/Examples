<html>
<html lang="en-gb">
<head>

	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Damien Johnson" />
	<meta name="description" content="Example Login Script">
	<link rel="stylesheet" type='text/css' href="style.css">
	<!-- Google Web Font Embed -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type = "text/javascript" src="validation.js"></script>
	
</head>
	
	
	<body>
	
	<h1> Login to Account </h1>
	
	<div id = "login_form" class = "login_form">
		<form method="post" action="validate_login.php" id = "login_form">
		
			<p>Please login using the form below</p>
			<div id = "redirect" class = "redirect">
				<p>Sorry, your details could not be recognised. Please try again </p>
			</div>
			<label for="email">E-Mail Address:</label>
			<input type="email" name="email" placeholder="E-Mail Address"><br />
			<span class="error">This field is required</span>
			<label for="password">Password: </label>
			<input type="password" name="password" placeholder = "Password"><br /><br />
			<span class="error">This field is required</span>

			<button type="submit" name="submit" >Login</button>
			
			<a href = "register.php"><br />No Account? Click here to register</a>
			
		</form>
			
	</div>
	
	</body>

	






	
