<?php
// Initialize the database connection
require_once('connection.php');

session_start();
// Check for empty user & pass values
$id = !empty($_POST['id']) ? $_POST['id'] : '';
$name = !empty($_POST['name']) ? $_POST['name'] : '';
$position = !empty($_POST['position']) ? $_POST['position'] : '';
$description = !empty($_POST['description']) ? $_POST['description'] : '';
$email = !empty($_POST['email']) ? $_POST['email'] : '';
$phone = !empty($_POST['phone']) ? $_POST['phone'] : '';

// Escaping strings to prevent from mysqli injection  
$id = mysqli_real_escape_string($con, stripcslashes($id));
$name = mysqli_real_escape_string($con, stripcslashes($name));
$position = mysqli_real_escape_string($con, stripcslashes($position));
$description = mysqli_real_escape_string($con, stripcslashes($description));
$email = mysqli_real_escape_string($con, stripcslashes($email));
$phone = mysqli_real_escape_string($con, stripcslashes($phone));

// Running the query
$sql = "UPDATE staff SET name='$name',position='$position',description='$description',email='$email',phone='$phone' WHERE id='$id'";
$result = mysqli_query($con, $sql);

// returning JSON values to ajax call 
if ($result) {
	$output = array(
		'status' => 'success',
	);
} else {
	$output = array(
		'status' => 'error',
	);
}

// json encoding the output array object
echo json_encode($output);

exit; ?>
