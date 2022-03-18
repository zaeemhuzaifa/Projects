<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Article-Write Your Thoughts</title>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
	<script src="javascript/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div id="header">
		<ul id="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="login.php">Login</a></li>
			<!-- <li><a href="" id="signup">Signup</a></li> -->
			<li><a href="about.php">About</a></li>
			<!-- <input type="button" id="signup" value="Signup" name="signup"> -->
		</ul>
	</div>




	<form action="index.php" id="signupform" method="POST" enctype="multipart/form-data">
		
		<div class="file-upload">
		<div style="position: absolute;top: 17px;right: 58px;color: aqua;">	<p>Upload a Profile Picture</p></div>
<!--place upload image/icon first !-->
<!-- <img src="https://i.stack.imgur.com/dy62M.png" /> -->
<img src="styles/images/camera.jpg" />

<!--place input file last !-->
<input type="file" name="somename" />
</div>	
		
		
		<input class="forminput" type="text" id="name" placeholder="Name" name="name">
		<input class="forminput" type="email"id="email" placeholder="Email" name="email">
		<input class="forminput" type="password" id="password" placeholder="Password" name="password">
		<input class="forminput" type="password" placeholder="Re-type Password" name="password">
		<input class="forminput" type="text" id="contact" placeholder="Contact no." name="contact">
		<div id="genderdiv">
		<label id="gender">Choose Your Gender:</label>
		<select id="gender" style="border: none;color: gray;">		
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="Others">Others</option>

		</select></div><br>


		<!-- <button id="register" name="register">Register</button> -->
		<input type="button" id="register" name="register" value="Register">
		<p style="font-size: 18px; color: #ffebc4;">Already have an account? <a style="color: white;" href="login.php">Login Now</a></p>
		
	</form>
	<div id="result" onclick="result()"></div>
<script src="javascript/javascript.js"></script>
</body>
</html>