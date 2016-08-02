<html>
<html lang="en-gb">
<head>

	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Damien Johnson" />
	<meta name="description" content="Example Register Script">
	<link rel="stylesheet" type='text/css' href="style.css">
	<!-- Google Web Font Embed -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type = "text/javascript" src="validation.js"></script>
	
</head>
	
	
	<body>
	
	<h1> Register for Account </h1>
	
	<div id = "register_form" class = "register_form">
		<form method="post" action="update.php" id = "register_form">
			<p>Please complete the form below to setup a new account</p>
			<label for="FirstName">First Name:</label>
			<input type="text" name="FirstName" placeholder="First Name"><br />
			<span class="error">This field is required</span>
			<label for="LastName">Last Name: </label>
			<input type="text" name="LastName" placeholder = "Last Name"><br />
			<span class="error">This field is required</span>
			<label for="email">Email: </label>
			<input type="email" name="email" placeholder = "Email Address"><br />
			<span class="error">A valid email address is required</span>			
			<label for="Password">Password: </label>
			<input type="password" name="Password" placeholder = "Password"><br /><br />
			<span class="error">This field is required</span>
			<button type="submit" name="submit" >Register</button>
	</div>
	
	</body>




	
