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

		h1 {
			font-size: 2em;
			color: #d9534f;
			text-align: center;
			margin-bottom: 30px;
		}

		.userContainer {
			background-color: #fff;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			width: 600px;
			margin: 0 auto;
			text-align: left;
		}

		.userContainer p {
			font-size: 1.1em;
			margin: 10px 0;
		}

		.userContainer p span {
			font-weight: bold;
		}

		input[type="submit"] {
			background-color: #d9534f;
			color: white;
			border: none;
			padding: 10px 15px;
			border-radius: 4px;
			font-size: 1em;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}

		input[type="submit"]:hover {
			background-color: #c9302c;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getUserById = getUserById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="userContainer">
			<p>First Name: <?php echo $getUserById['first_name']; ?></p>
			<p>Last Name: <?php echo $getUserById['last_name']; ?></p>
			<p>Email: <?php echo $getUserById['email']; ?></p>
			<p>Gender: <?php echo $getUserById['gender']; ?></p>
			<p>Age: <?php echo $getUserById['age']; ?></p>
			<p>Job Position: <?php echo $getUserById['job_position']; ?></p>
			<p>Location: <?php echo $getUserById['location']; ?></p>
			<input type="submit" name="deleteUserBtn" value="Delete">
		</div>
	</form>
</body>
</html>