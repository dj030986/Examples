<?php
//Connect to Database, however not secure, should be Object-Oriented and connect via a require_once (Update when time permits)
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

$db = mysqli_connect($servername,$username,$password,$dbname);?>

<!doctype>
<head>
<title>Validate</title>
<link rel="stylesheet" type='text/css' href="style.css">
<!-- Google Web Font Embed -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<h1>

<?php

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      //email and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      //set variables aquired from html form
	  
      $sql = "SELECT * FROM users WHERE email = '$myusername' and Password = '$mypassword'";
		//sql statement
	  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
      $count = mysqli_num_rows($result); 
      
      // Check Database that credentials are correct. If result matched $email and $password, table row must be 1 row
		
	
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
		 //Save variables as session 
			$FirstName = "SELECT FirstName, LastName FROM users WHERE email = '$myusername'";
			$result = $db->query($FirstName);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);{
			echo 'Welcome ',$row['FirstName'] . ' ' . $row['LastName'] . '<br/>';
			}
	  }
			
			
   
	   // If above are correct, Welcome User
      else {
		header("Location: http://localhost/www/examples/login_fail.php");
		// Else redirect to failed login
      }
   }

?>



	
	<p><a href ="logout.php"> Click Here to logout</a></p>



</body>