<?php
// Initialize the database connection
require_once('connection.php');

session_start();
// Check for empty user & pass values
$username = !empty($_POST['user']) ? $_POST['user'] : '';
$password = !empty($_POST['pass']) ? $_POST['pass'] : '';

// Escaping strings to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

// Running the query
$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

// returning JSON values to ajax call in login.php
if ($count == 1) {
	$_SESSION['food_user'] = $row['username'];
	$output = array(
		'status' => 'success',
		'user' => $row['username'],
	);
} else {
	$output = array(
		'status' => 'error',
		'message' => 'Invalid username or password.',
	);
}

// json encoding the output array object
echo json_encode($output);

exit; ?>
