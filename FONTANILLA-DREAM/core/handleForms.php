<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewUserBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$job_position = trim($_POST['job_position']);
	$location = trim($_POST['location']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($gender) && !empty($age)  && !empty($age)  && !empty($job_position) && !empty($location)) {
			$query = insertIntoUserRecords($pdo, $firstName, $lastName, 
			$email, $gender, $age, $job_position, $location);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editUserBtn'])) {
	$id = $_GET['id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$job_position = trim($_POST['job_position']);
	$location = trim($_POST['location']);

	if (!empty($id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($gender) && !empty($age) && !empty($job_position) && !empty($location)) {

		$query = updateAUser($pdo, $id, $firstName, $lastName, $email, $gender, $age, $job_position, $location);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteUserBtn'])) {

	$query = deleteAUser($pdo, $_GET['id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>