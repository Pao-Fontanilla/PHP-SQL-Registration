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

		h3 {
			font-size: 1.5em;
			margin-bottom: 20px;
			color: #444;
			text-align: center;
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

		table {
			width: 100%; 
			margin: auto; 
			background-color: #fff;
			border-collapse: collapse;
		}

		th, td {
			padding: 12px;
			text-align: left;
			border: 1px solid #ddd;
		}

		th {
    		background-color: #f2f2f2;
    		font-weight: bold;
		}

		tr:nth-child(even) {
    		background-color: #f9f9f9;
		}

		a {
			color: #007bff;
			text-decoration: none;
			margin-right: 10px;
		}

		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Web Development Registration. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name:</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name:</label> <input type="text" name="lastName"></p>
		<p><label for="email">Email:</label> <input type="text" name="email"></p>
		<p><label for="gender">Gender:</label> <input type="text" name="gender"></p>
		<p><label for="age">Age:</label> <input type="text" name="age"></p>
		<p><label for="job_position">Job Position:</label> <input type="text" name="job_position"></p>
		<p><label for="location">Location:</label> <input type="text" name="location"></p>
		<input type="submit" name="insertNewUserBtn">
	</form><br>

	<table>
	  <tr>
	    <th>User ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Gender</th>
	    <th>Age</th>
	    <th>Job Position</th>
	    <th>Location</th>
	  </tr>

	  <?php $seeAllUserRecords = seeAllUserRecords($pdo); ?>
	  <?php foreach ($seeAllUserRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['job_position']; ?></td>
	  	<td><?php echo $row['location']; ?></td>
	  	<td>
	  		<a href="edituser.php?id=<?php echo $row['id'];?>">Edit</a>
	  		<a href="deleteuser.php?id=<?php echo $row['id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>