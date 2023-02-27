<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/form.css">

<div class="signup">
		
	<form action="register.php" method="post">
		
		<h1>Please Sign up</h1>
		<hr><br>

		<label for="inputEmail">Name</label> <br>
		<input type="text" id="inputEmail" placeholder="Name" name="name" required autofocus>

		<br><br>

		<label for="inputEmail">Surname</label> <br>
		<input type="text" id="inputEmail" placeholder="Surname" name="surname" required autofocus>

		<br><br>

		<label for="inputEmail">Username</label> <br>
		<input type="text" id="inputEmail" placeholder="Username" name="username" required autofocus>

		<br><br>

		<label for="inputEmail">Email</label> <br>
		<input type="email" id="inputEmail" placeholder="Email" name="email" required autofocus>

		<br><br>

		<label for="inputPassword">Password</label> <br>
		<input type="password" id="inputPassword" placeholder="Password" name="password" required>

		<br><br>

		<button type="submit" name="submit">Sign up</button>

		<br><br>

		<small>Already have account? <a href="login.php">Log In</a></small>
		

	</form>
</div>

</body>
</html>