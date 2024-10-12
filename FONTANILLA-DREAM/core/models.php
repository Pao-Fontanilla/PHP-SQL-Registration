<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoUserRecords($pdo,$first_name, $last_name, $email, $yearLevel, $age, $job_position, $location) {

	$sql = "INSERT INTO user_records (first_name,last_name,email,gender,age,job_position,location) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $yearLevel, 
		$age, $job_position, $location]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllUserRecords($pdo) {
	$sql = "SELECT * FROM user_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getUserById($pdo, $id) {
	$sql = "SELECT * FROM user_records WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateAUser($pdo, $id, $first_name, $last_name, 
	$email, $gender, $age, $job_position, $location) {

	$sql = "UPDATE user_records 
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					gender = ?, 
					age = ?, 
					job_position = ?, 
					location = ? 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, 
		$gender, $age, $job_position, $location, $id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteAUser($pdo, $id) {

	$sql = "DELETE FROM user_records WHERE id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}

}




?>