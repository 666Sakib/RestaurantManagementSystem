<?php
// Initialize the database connection
require_once('connection.php');

session_start();
// Check for empty user & pass values
$id = !empty($_POST['id']) ? $_POST['id'] : '';

// Running the query
$sql = "DELETE FROM staff WHERE id='$id'";
$result = mysqli_query($con, $sql);

// returning JSON values to ajax call 
if ($result) {
	$output = array(
		'status' => 'success',
		'result' => $result,
	);
} else {
	$output = array(
		'status' => 'error',
		'result' => $result,
	);
}

// json encoding the output array object
echo json_encode($output);

exit;
