<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

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
