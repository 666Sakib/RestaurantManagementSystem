<?php
// Initialize the database connection
require_once('connection.php');

session_start();
// Check for empty user & pass values
if (($_FILES['image']['name']!="")){
	// Where the file is going to be stored
		$target_dir = "../../images/";
		$file = $_FILES['image']['name'];
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['image']['tmp_name'];
		$path_filename_ext = $target_dir.$filename.".".$ext;
	 
	// Check if file already exists
	if (file_exists($path_filename_ext)) {
	 	echo "Sorry, file already exists.";
	 }else{
		move_uploaded_file($temp_name,$path_filename_ext);
	}
}

$image = !empty($_POST['image']) ? $_POST['image'] : '';
$name = !empty($_POST['name']) ? $_POST['name'] : '';
$position = !empty($_POST['position']) ? $_POST['position'] : '';
$description = !empty($_POST['description']) ? $_POST['description'] : '';
$email = !empty($_POST['email']) ? $_POST['email'] : '';
$phone = !empty($_POST['phone']) ? $_POST['phone'] : '';

// Escaping strings to prevent from mysqli injection  
$name = mysqli_real_escape_string($con, stripcslashes($name));
$position = mysqli_real_escape_string($con, stripcslashes($position));
$description = mysqli_real_escape_string($con, stripcslashes($description));
$email = mysqli_real_escape_string($con, stripcslashes($email));
$phone = mysqli_real_escape_string($con, stripcslashes($phone));
$image = '../../images/' . mysqli_real_escape_string($con, stripcslashes($_FILES['image']['name']));

// Running the query
$sql = "INSERT INTO staff(name,position,email,phone,image,description) VALUES('$name', '$position','$email','$phone','$image', '$description')";
$result = mysqli_query($con, $sql);

// returning JSON values to ajax call 
if ($result) {
	$output = array(
		'status' => 'success',
		'result' => $result,
		'name' => $name,
		'position' => $position,
		'description' => $description,
		'email' => $email,
		'phone' => $phone,
		'image' => $image,
	);
} else {
	$output = array(
		'status' => 'error',
		'result' => $result,
		'name' => $name,
		'position' => $position,
		'description' => $description,
		'email' => $email,
		'phone' => $phone,
		'image' => $image,
	);
}

// json encoding the output array object
echo json_encode($output);

exit;
