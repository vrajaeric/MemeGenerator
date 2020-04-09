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
<body>
<div id="navbar-back">
	<div id="navbar">	
			<a class="nav" href="index.php"><img id="logo" alt="MemeGen" src="memegen2.png"></a>
		<div class="nav menu-wrap" id="nav-make"></div>
		<div class="menu">
			<ul>
				<li><a href="profile.html">Profile</a></li>
				<li onclick="toggleMenu('submenu1');"><a href="#">Login</a>
			<ul class="submenu" id="submenu1">
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="signout.php">Sign Out</a></li>
			</ul>
			</ul>
		<div>
	</div>
<div>
<body>
