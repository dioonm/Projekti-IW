<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/form.css">


<div class="login">

		<form action="loginLA.php" method="post">
		
			<h1>Continue as admin</h1><hr><br>

			<label for="inputEmail">Username</label> <br>
			<input type="text" id="inputEmail" placeholder="Username" name="username" required autofocus>

			<br><br>

			<label for="inputPassword" >Password</label> <br>
			<input type="password" id="inputPassword" placeholder="Password" name="password" required>

			<br><br>

			<button type="submit" name="submit">Sign In as Admin</button>
			
			<br><br>

			<small>Continue as a <a href="login.php">User</a></small>
		</form>

	</div>

	</body>
</html>