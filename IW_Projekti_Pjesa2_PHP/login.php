<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/form.css">

<div class="login">

		<form action="loginLogic.php" method="post">
		
			<h1 class="h3 mb-3 font-weight-normal">Sign In</h1><hr><br>

			<label for="inputEmail">Username</label> <br>
			<input type="text" id="inputEmail" placeholder="Username" name="username" required autofocus>

			<br><br>

			<label for="inputPassword">Password</label> <br>
			<input type="password" id="inputPassword" placeholder="Password" name="password" required>

			<br><br>

			<button type="submit" name="submit">Sign in</button>
			
			<br><br>

			<small>Don't have account ?  <a href="signup.php"> Sign Up</a></small> <br><br><hr>
			<small>Continue as admin. <a href="loginadmin.php">Admin</a></small>
		</form>

	</div>
	</body>
</html>
