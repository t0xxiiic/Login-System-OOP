<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<script src="script.js"></script>
	<?php
		include_once 'inc/dbh.inc.php';
	?>
</head>
<body>
	<header>
		<div class="login-container" id="in">
			<form id="loginForm" onsubmit="loginLogout(1)">
				<input type="text" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<button type="submit" onclick="loginLogout(1)">Login</button>
			</form>
		</div>
		<div class="logout-container" id="out">
			<form id="logoutForm" onsubmit="loginLogout(0)">
				<button type="submit" onclick="loginLogout(0)">Logout</button>
			</form>
		</div>
		
	</header>

	
