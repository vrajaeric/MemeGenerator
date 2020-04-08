<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Meme Generator</title>
</head>

<script>
			function toggleMenu(arg){
				if(document.getElementById(arg).style.display=='block'){
					document.getElementById(arg).style.display='none';
				}
				else{
					document.getElementById(arg).style.display='block';
				}
				
			
			}
		</script>

<h1>
	<a href="index.php">
<img border="0" alt="MemeGen" src="memegen2.png" width="100" height="100">
</a>
</h1>
  
 
<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="profile.php">Profile</a>
			
			<li onclick="toggleMenu('submenu1');"><a href="#">Login</a>
				<ul class="submenu" id="submenu1">
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="signout.php">Sign Out</a></li>
				</ul>
			</li>
</ul>
