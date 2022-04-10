<?php
session_start();

$food_user = $_SESSION['food_user'];

require_once('connection.php');
if (empty($food_user)) {
	header("Location: login.php");
}

// Running the staff query
$sql = "SELECT * FROM staff";
$result = mysqli_query($con, $sql);
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
				<h1>
					Welcome "<?php echo $food_user; ?>"
				</h1>
				<a href="logout.php">Logout</a>
			</div>
		</div>
		<div class="row">
			<h3>
				Employee List
				<br>
				<a href="add.php" class="btn btn-primary">Add Employee</a>
			</h3>
			<div style="display: grid; grid-template-columns: auto auto auto; grid-gap: 16px; align-items: center;">
				<?php while ($staff = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
					<div class="col-3">
						<div class="card">
							<div class="container">
								<img src="<?php echo $staff["image"]; ?>" alt="RAZ" style="height: 200px; width:200px; object-fit: cover;">
								<h2><?php echo $staff["name"]; ?></h2>
								<p class="title"><?php echo $staff["position"]; ?></p>
								<br />
								<p><?php echo $staff["description"] ?></p>
								<br />
								<p><?php echo $staff["email"] ?></p>
								<a href="tel:<?php echo $staff["phone"]; ?>" class="btn btn-primary">
									Phone: <?php echo $staff["phone"]; ?>
								</a>
								<br>
								<a href="edit.php?id=<?php echo $staff['id']; ?>" class="button">
									Edit
								</a>
								<button class="button delete-btn" onclick="deletestaff(<?php echo $staff['id']; ?>)">
									Delete
								</button>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script>
			function deletestaff(id) {
				// var id = $(this).data('id');

				if (id == "") {
					alert("Invalid User Input");
					return false;
				}

				// do the ajax call
				jQuery.ajax({
					url: "deletestaff.php",
					type: "POST",
					data: {
						id: id,
					},
					success: function(res) {
						let data = JSON.parse(res);
						if (data.status == "success") {
							window.location.reload();
						} else {
							alert("Invalid User Input");
						}
					}
				});
			}
		jQuery(document).ready(function($) {
		});
	</script>

</body>

</html>