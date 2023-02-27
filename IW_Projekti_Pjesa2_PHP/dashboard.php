<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DASHBOARD</title>
	<link rel="stylesheet" href="css/form.css">
</head>
<body>


	<?php 

		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM users");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>


	 <table class="tabela">
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
				<td> <?= $user['email']  ?> </td>
				<td> <?= $user['password']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>

	 <br><br>

	 <button class="butoni" type="submit" name="submit"><a href="index.php">Add User</a></button>

	 <!-- <a href="index.php">Add User</a> -->
	
</body>
</html>