<?php
session_start();

$food_user = $_SESSION['food_user'];

require_once('connection.php');
if (empty($food_user)) {
	header("Location: login.php");
}

$current_staff = $_GET['id'];

// Running the staff query
$sql = "SELECT * FROM staff WHERE id='$current_staff'";
$result = mysqli_query($con, $sql);
$staff = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
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
			<h3>Employee Info Edit: <?php echo $staff['name'] ?></h3>
			<div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 16px; align-items: center; margin-top: 16px;">
				<div class="col-3 login-email">
					<form name="editform" class="card">
						<div class="input-group">
							<label>Name:</label>
							<input name="name" value="<?php echo $staff["name"]; ?>" />
						</div>
						<div class="input-group">
							<label>Position:</label>
							<input name="position" value="<?php echo $staff["position"]; ?>" />
						</div>
						<div class="input-group">
							<label>Description:</label>
							<textarea name="description"><?php echo $staff["description"]; ?></textarea>
						</div>
						<div class="input-group">
							<label>Email:</label>
							<input name="email" value="<?php echo $staff["email"]; ?>" />
						</div>
						<div class="input-group">
							<label>Phone:</label>
							<input name="phone" value="<?php echo $staff["phone"]; ?>" />
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
			var name = document.editform.name.value;
			var position = document.editform.position.value;
			var description = document.editform.description.value;
			var email = document.editform.email.value;
			var phone = document.editform.phone.value;
			if (name.length == '' || position.length == '' || description.length == '' || email.length == '' || phone.length == '' ) {
				alert("All fields are required");
				return false;
			} else {
				// do the ajax call
				jQuery.ajax({
					url: "updatestaff.php",
					type: "POST",
					data: {
						id: <?php echo $current_staff; ?>,
						name: name,
						position: position,
						description: description,
						email: email,
						phone: phone,
					},
					success: function(res) {
						let data = JSON.parse(res);
						if (data.status == "success") {
							window.location.reload();
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