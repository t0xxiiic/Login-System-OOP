<?php
include_once 'header.php';
?>

	<section>
		<div class="signup-container">
			<h2>Sign Up</h2>
			<form name="SignupForm" action="signup.inc.php" onsubmit="validateSignupForm()" method="post">
				<input type="text" name="email" placeholder="Enter email" required><span id="emailP"></span> <br>
				<input type="password" name="password" placeholder="Enter password" required><span id="passwordP"></span><br>
				<button type="submit">Signup</button>
			</form>
		</div>
	</section>

<?php 
	include_once 'footer.php';
?>