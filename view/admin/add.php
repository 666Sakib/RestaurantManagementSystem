<?php
session_start();

$food_user = $_SESSION['food_user'];

require_once('connection.php');
if (empty($food_user)) {
	header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../../control/header.css">
</head>

<body>
	<?php include_once '../header.php'; ?>

	<main class="container-fluid">
		<div class="header-row" style="margin-bottom: 30px;">
			<div class="col-12">
				<h2>
					Welcome "<?php echo $food_user; ?>"
				</h2>
				<small><a href="logout.php">Logout</a></small>
			</div>
		</div>
		<div class="row container">
			<h3>Employee Info Add:</h3>
			<div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 16px; align-items: center; margin-top: 16px;">
				<div class="col-3 login-email">
					<form name="editform" class="card">
						<div class="input-group">
							<label>Image:</label>
							<input type="file" name="image" accept="image/png, image/gif, image/jpeg" />
						</div>
						<div class="input-group">
							<label>Name:</label>
							<input name="name" />
						</div>
						<div class="input-group">
							<label>Position:</label>
							<input name="position" />
						</div>
						<div class="input-group">
							<label>Description:</label>
							<textarea name="description"></textarea>
						</div>
						<div class="input-group">
							<label>Email:</label>
							<input name="email" />
						</div>
						<div class="input-group">
							<label>Phone:</label>
							<input name="phone" />
						</div>
						<br />
						<div class="input-group">
							<input type="submit" id="btn" value="Save" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
	jQuery(document).ready(function($) {
		$('.login-email').on('submit', function(e) {
			e.preventDefault();
			var image = document.editform.image.files[0];
			var name = document.editform.name.value;
			var position = document.editform.position.value;
			var description = document.editform.description.value;
			var email = document.editform.email.value;
			var phone = document.editform.phone.value;
			
			var form_data = new FormData();                  
			form_data.append('image', image);
			form_data.append('name', name);
			form_data.append('position', position);
			form_data.append('description', description);
			form_data.append('email', email);
			form_data.append('phone', phone);
			
			if (name.length == '' || position.length == '' || description.length == '' || email.length == '' || phone.length == '' ) {
				alert("All fields are required");
				return false;
			} else {
				// do the ajax call
				$.ajax({
					type: 'POST',
					url: 'addstaff.php',
					data: form_data,
					dataType: 'json',
					contentType: false,
					cache: false,
					processData:false,
					success: function(res) {
						let data = JSON.parse(res);
						if (data.status == "success") {
							// window.location.reload();
							// window.location.href = "dashboard.php";
						} else {
							alert("Invalid inputs");
						}
					}
				});
			}
		});
	});
</script>
</body>

</html>