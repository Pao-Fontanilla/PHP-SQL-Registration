<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial", sans-serif;
			background-color: #f9f9f9;
			margin: 0;
			padding: 20px;
			color: #333;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			width: 600px;
			margin-bottom: 30px;
			margin: auto;
		}

		form p {
			margin-bottom: 15px;
		}

		label {
			font-weight: bold;
			margin-right: 10px;
		}

		input[type="text"] {
			font-size: 1em;
			padding: 10px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 10px 15px;
			border-radius: 4px;
			font-size: 1em;
			cursor: pointer;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<?php $getUserById = getUserById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name:</label> 
			<input type="text" name="firstName" value="<?php echo $getUserById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name:</label> 
			<input type="text" name="lastName" value="<?php echo $getUserById['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email:</label>
			<input type="text" name="email" value="<?php echo $getUserById['email']; ?>">
		</p>
		<p>
			<label for="gender">Gender:</label>
			<input type="text" name="gender" value="<?php echo $getUserById['gender']; ?>">
		</p>
		<p>
			<label for="age">Age:</label>
			<input type="text" name="age" value="<?php echo $getUserById['age']; ?>">
		</p>
		<p>
			<label for="job_position">Job Position:</label>
			<input type="text" name="job_position" value="<?php echo $getUserById['job_position']; ?>"></p>
		<p>
			<label for="location">Location:</label>
			<input type="text" name="location" value="<?php echo $getUserById['location']; ?>">
		</p>
		<input type="submit" name="editUserBtn">
	</form>
</body>
</html>